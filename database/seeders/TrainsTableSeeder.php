<?php

namespace Database\Seeders;

use App\Models\Train;

use Faker\Generator as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();

            $train->Azienda = $faker->word();
            $train->Stazione_Di_Partenza = $faker->city();
            $train->Stazione_Di_Arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->numberBetween(4, 9);
            $train->In_Orario = $faker->randomElement(['si', 'no']);
            $train->Cancellato = $faker->randomElement(['si', 'no']);

            $train->save();
        }
    }
}