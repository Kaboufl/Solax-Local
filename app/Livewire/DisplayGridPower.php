<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\ProductionData;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;


class DisplayGridPower extends Component
{
    public $startDate, $endDate;
    public Collection $data;
    
    public $types = ['gridPower'];

    public $colors = ['gridPower' => '#0C3762'];

    public function __construct(...$args)
    {

        $this->startDate = Carbon::now()->subDays(3)->format('Y-m-d');
        $this->endDate = Carbon::now()->format('Y-m-d');

        $this->data = ProductionData::select('id', 'measured_at', 'grid_power')
                                ->where('measured_at', '>=', Carbon::now()->subDays(3))
                                ->orderBy('measured_at', 'asc')
                                ->get();
    }
    
    public function changePeriod()
    {
        $startDate = Carbon::parse($this->startDate);
        $endDate = Carbon::parse($this->endDate);
        //dd($startDate, $endDate->addDay());
        $this->data = ProductionData::select('id', 'measured_at', 'grid_power')
            ->where('measured_at', '>=', $startDate)
            ->where('measured_at', '<', $endDate->addDay())
            ->orderBy('measured_at', 'asc')
            ->get();
    }

    public function makeChart()
    {
        $chart = $this->data->reduce(function (LineChartModel $chart, $data) {
            $date = Carbon::parse($data->measured_at)->format('H:i');
            return $chart->addPoint($date, $data->grid_power);
        }, LivewireCharts::LineChartModel()
            ->setTitle('Puissance injectée')
            ->setColors('#0C3762')
            ->setAnimated(true)
            ->withOnPointClickEvent('onPointClick')
            ->withLegend()
            ->setSmoothCurve()
            ->setXAxisVisible(false)
            ->setDataLabelsEnabled(false));

        $this->dispatch('chartRendered');
        return $chart;
    }

    public function render()
    {
        $chart = $this->makeChart();
        return view('livewire.display-grid-power', ['chart' => $chart]);
    }
}
