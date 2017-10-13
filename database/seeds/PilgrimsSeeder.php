<?php

use App\pilgrim;
use Illuminate\Database\Seeder;

class PilgrimsSeeder extends Seeder
{   	 /*
     * Run the database seeds.
     *
     * @return void
     */
        public function run(){
        pilgrim::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            pilgrim::create([ //,
                'name' => $faker->lastName,
                'firstname' => $faker->userName,
                'id_address' => $i+1,
            ]);

    	}
    }
}
