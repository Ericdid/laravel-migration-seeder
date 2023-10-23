<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->Azienda = "Prova";
        $train->Stazione_Di_Partenza = "Punto_A";
        $train->Stazione_Di_Arrivo = "Punto_B";
        $train->orario_di_partenza = 13.00;
        $train->orario_di_arrivo = 14.00;
        $train->codice_treno = 25423;
        $train->numero_carrozze = 15;
        $train->In_Orario = 'si';
        $train->Cancellato = "no";

        $train->save();
    }
}