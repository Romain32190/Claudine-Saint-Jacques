<?php

use App\vehicles;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(){
        vehicles::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            vehicles::create([ //,
                'brand' => 'Renault',
                'type' => 'Traffic',
                'vehicleRegistration' => $faker->ean8,
                'capacity' => 9,
                'maxLuggages' => 20,
                'minWeight' => 1500,
                'maxWeight' => 2500,
                'insuranceNumber' => 7547598,
                'technical control' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())

            ]);

    	}     
    }
}

