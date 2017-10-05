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
                'number' => $faker->randomDigit,
                'weight' => $faker->randomDigit,
                

            ]);

    	} 
    }
}
