<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Faker\Provider\en_Us\Person;

use App\Models\Train;

class TrainSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $fake_train = new Train();
            $fake_train->azienda = $faker->word();
            $fake_train->stazione_di_partenza = $faker->sentence(3);
            $fake_train->stazione_di_arrivo = $faker->sentence(3);
            $fake_train->orario_di_partenza = $faker->time('H:m');
            $fake_train->orario_di_arrivo = $faker->time('H:m');
            $fake_train->codice_treno = $faker->bothify('###');
            $fake_train->numero_carrozze = $faker->bothify('##');
            $fake_train->in_orario = $faker->boolean();
            $fake_train->cancellato = $faker->boolean();
            $fake_train->data = $faker->date('Y_m_d');

            $fake_train->save();
        }
    }
}
