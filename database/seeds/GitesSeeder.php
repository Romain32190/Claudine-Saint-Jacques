<?php

use App\gites;
use Illuminate\Database\Seeder;

class GitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        gites::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 74;

        for ($i = 0; $i < $limit; $i++) {
            gites::create([
                'name' => $faker->city,
                'id_address' => $i+16
                

            ]);

    	} 
    }
}
