<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Journey;


class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i  < 10; $i++) { 
            $new_journey = new Journey();
            $new_journey->destination = $faker->text('50');
            $new_journey->airport = $faker->text('50');
            $new_journey->flight_hours = $faker->randomNumber(4, false) . ' Hours';
            $new_journey->departure = $faker->text('20');
            $new_journey->arrival = $faker->text('20');
            $new_journey->shuttle_service = $faker->boolean();
            $new_journey->hotel = $faker->boolean();
            $new_journey->price = $faker->randomNumber(3, true) . '$';
            $new_journey->save();
        }
    }
}
