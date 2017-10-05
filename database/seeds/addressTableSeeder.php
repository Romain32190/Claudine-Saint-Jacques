<?php

use App\address;
use Illuminate\Database\Seeder;

class addressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      address::truncate();
      $faker = Faker\Factory::create('fr_FR');

      $limit = 15;

      for ($i = 0; $i < $limit; $i++) {
          address::create([ //,
              'number' => $faker->randomNumber,
              'street' => $faker->streetName,
              'zipcode' => $faker->postcode,
              'city' => $faker->city,
              'flatNumber' => $faker->buildingNumber,
              'floor' => $faker->randomNumber,
              'flatName' => $faker->name,
              'latitude' => $faker->latitude($min = -60, $max = 60),
              'longitude' => $faker->longitude($min = -100, $max = 100),
              'phone' => $faker->isbn10,
              'mobile' =>$faker->isbn10
          ]);

    }
  }
}
