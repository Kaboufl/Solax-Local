<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SolaxService;
use App\Models\ProductionData;
use Carbon\Carbon;

class CollectSolaxData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collect:solax-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Collecter les données de l\'onduleur Solax et de les mettre en BDD.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // On instancie le service Solax
        $solax = new SolaxService;

        // On récupère et traite les données de l'onduleur
        $response = $solax->parse();

        // On crée un objet ProductionData si on a reçu des données
        if ($response)
        {
            $productionData = ProductionData::create([
                'yield_today' => $solax->yieldToday,
                'grid_power' => $solax->gridPower,
                'grid_voltage' => $solax->gridVoltage,
                'grid_current' => $solax->gridCurrent,
                'grid_freq' => $solax->gridFreq,
                'pv1_power' => $solax->pv1->puissance,
                'pv1_voltage' => $solax->pv1->tension,
                'pv1_current' => $solax->pv1->intensite,
                'pv2_power' => $solax->pv2->puissance,
                'pv2_voltage' => $solax->pv2->tension,
                'pv2_current' => $solax->pv2->intensite,
                'measured_at' => Carbon::now()
            ]);
        }
    }
}
