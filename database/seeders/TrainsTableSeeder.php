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

            $train->Azienda = $faker->company();
            $train->Stazione_Di_Partenza = $faker->city();
            $train->Stazione_Di_Arrivo = $faker->city();
            $train->orario_di_partenza = $faker->numberBetween(0, 24) . " : " . $faker->numberBetween(0, 59);
            $train->orario_di_arrivo = $faker->numberBetween(0, 24) . " : " . $faker->numberBetween(0, 59);
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->numberBetween(4, 9);
            $train->In_Orario = $faker->randomElement(['si', 'no']);
            $train->Cancellato = $faker->randomElement(['si', 'no']);

            $train->save();
        }
    }
}