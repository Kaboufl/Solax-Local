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
        $solax = app(SolaxService::class);

        // On récupère et traite les données de l'onduleur
        $response = $solax->parse();

        // On crée un objet ProductionData si on a reçu des données
        if ($response)
        {
            return $response->save();
        }
    }
}
