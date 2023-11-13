<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\SolaxService;
use Illuminate\Support\Benchmark;

class RealTime extends Component
{
    public $apiStatus;

    public $productionData;
    public $totalPower;



    public function mount() {
        $this->updateSolaxLive();
    }

    public function updateSolaxLive() {
        $solax = app(SolaxService::class);
        try {
            $this->productionData = $solax->parse();
            $this->totalPower = $solax->totalPower;
            $this->apiStatus = $solax->statusCode;
        } catch (\Throwable $th) {
            //throw $th;
            return $solax;
        }
        // Benchmark::dd(['get' => fn () => $solax->get(),
        //                 'parse' => fn () => $solax->parse()]);
    }
    
    public function render(SolaxService $solax)
    {
        return view('livewire.real-time');
    }
}
