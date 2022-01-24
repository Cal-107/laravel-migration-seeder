<?php

use Illuminate\Database\Seeder;
use App\Journey;
use Faker\Generator as Faker;
class JourneysTableSeeder extends Seeder
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
            $new_journey->destination = $faker->word();
            $new_journey->airport = $faker->word();
            $new_journey->flight_hours = $faker->randomNumber(1, true);
            $new_journey->departure_date = $faker->dateTime();
            $new_journey->arrival_date = $faker->dateTime();
            $new_journey->comeback_departure_date = $faker->dateTime();
            $new_journey->comeback_arrival_date = $faker->dateTime();
            $new_journey->shuttle_service = $faker->boolean();
            $new_journey->hotel = $faker->boolean();
            $new_journey->price = $faker->randomNumber(2, true);
            $new_journey->save();
        }
    }
}
