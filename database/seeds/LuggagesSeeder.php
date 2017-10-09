<?php

use App\luggages;
use Illuminate\Database\Seeder;

class LuggagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        luggages::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 40;

        for ($i = 0; $i < $limit; $i++) {
            luggages::create([
                'id_pilgrims' => $faker->numberBetween(1,16),
                'startDate' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
                'start'=> $faker->city,
                'goal' => $faker->city,
                'weight' => $faker->randomDigit,

            ]);

    	}
    }
}
