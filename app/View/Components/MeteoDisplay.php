<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\WeatherService;
use COM;

class MeteoDisplay extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $weather = null,
        public $partOfDay = null,
        public $time = null)
    {
        //
        $weather = app(WeatherService::class);
        $this->weather = $weather;

        if ($weather->isDay) {
            $time = \Carbon\Carbon::now()->format('H');
            if ($time < 10) {
                $this->partOfDay = 'matin';
            } else if ($time > 10 && $time < 17) {
                $this->partOfDay = 'midi';
            } else if ($time >= 17) {
                $this->partOfDay = 'soir';
            }
        } else {
            $this->partOfDay = 'nuit';
        }

        $this->time = \Carbon\Carbon::now()->format('H:i');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meteo-display');
    }
}
