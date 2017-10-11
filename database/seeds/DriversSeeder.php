<?php

use App\drivers;
use Illuminate\Database\Seeder;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        drivers::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            drivers::create([ //,
                'name' => $faker->userName,
                'firstname' => $faker->userName,
                'drivingLicence' => 6788745,
                'id_address' => $i+1,
                'id_vehicle' => $i+1,

            ]);

    	}
    }
}
