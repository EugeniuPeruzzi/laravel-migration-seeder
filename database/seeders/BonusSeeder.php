<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Faker\Provider\en_Us\Person;

use App\Models\Bonus;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $fake_train = new Bonus();
            $fake_train->azienda = $faker->bothify('?????');
            $fake_train->start_station = $faker->sentence(3);
            $fake_train->end_station = $faker->sentence(3);
            $fake_train->departure_time = $faker->time('H:m');
            $fake_train->arrival_time = $faker->time('H:m');
            $fake_train->ticket_code = $faker->bothify('###');
            $fake_train->number_vagons = $faker->bothify('##');
            $fake_train->in_time = $faker->boolean();
            $fake_train->canceled = $faker->boolean();
            $fake_train->date = $faker->date('Y_m_d');

            $fake_train->save();
        }
    }
}
