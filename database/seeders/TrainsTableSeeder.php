<?php

namespace Database\Seeders;

use Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(4, true);
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->randomElement(["sì", "no"]);
            $newTrain->cancellato = $faker->randomElement(["sì", "no"]);
            $newTrain->data_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->data_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->save();
        }
    }
}
