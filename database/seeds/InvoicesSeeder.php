<?php

use Illuminate\Database\Seeder;
use App\invoice;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	invoice::truncate();
    	$faker = Faker\Factory::create('fr_FR');

    	$limit = 15;

    	for ($i=0; $i < $limit; $i++) { 
    		
    		invoice::create([
    			'id_pilgrim' => $i+1,
    			'luggages' => $faker->numberBetween($min = 1, $max = 6), // 8567
    			'luggagesTravels' => $faker->numberBetween($min = 1, $max = 6), // 8567
    			'pilgrimTravels' => $faker->numberBetween($min = 1, $max = 6), // 8567
    		]);
    	}

        



    }
}
