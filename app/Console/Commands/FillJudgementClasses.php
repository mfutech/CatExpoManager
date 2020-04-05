<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\JudgementClasses;

class FillJudgementClasses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fillJudgementClasses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reinitialize Judgment Classes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        JudgementClasses::each( function ($item, $key) {
            $item->delete();
        });
        (new JudgementClasses ( [ 'class'=> 'Honneur', 'class_description' => "Classe d'Honneur/Ehrenklasse" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'Maison', 'class_description' => "Chat de maison/Hauskatzen" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'GCACE/GCAPE', 'class_description' => "Grand Champ./premiorat d'Europe (GCACE/GCAPE)" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'CACE/CAPE', 'class_description' => "Championnat/premiorat d'Europe (CACE/CAPE)" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'CAGCI/CAGPI', 'class_description' => "Grand Champ./Grand prem.international (CAGCI/CAGPI)" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'CACIB/CAPIB', 'class_description' => "Championnat/premiorat international (CACIB/CAPIB" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'CAC/CAP', 'class_description' => "Championnat/premiorat (CAC/CAP) dès 9 ou 10 mois" ]))->save();
        (new JudgementClasses ( [ 'class'=> '6-9', 'class_description' => "6-9 mois/Monate (ou 6-10 mois/monate)" ]))->save();
        (new JudgementClasses ( [ 'class'=> '3-6', 'class_description' => "3-6 mois/Monate" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'Portée', 'class_description' => "Portée/Wurf (jusqu’à 4 mois/bis 4 monaten)" ]))->save();
        (new JudgementClasses ( [ 'class'=> 'H.C.', 'class_description' => "Hors concours/Ausser Konkurrenz" ]))->save();
    }
}
