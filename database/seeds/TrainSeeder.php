<?php

use App\Train;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->shuffle();
            $newTrain->stazione_di_partenza = $faker->citySuffix();
            $newTrain->stazione_di_arrivo = $faker->citySuffix();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->data = $faker->date();
            $newTrain->codice_treno = $faker->randomNumber(5, true);
            $newTrain->numero_carrozze = $faker->numberBetween(10, 50);
            $newTrain->in_orario = $faker->boolean(true);
            $newTrain->cancellato = $faker->boolean(false);
            $newTrain->save();
        }
    }
}
