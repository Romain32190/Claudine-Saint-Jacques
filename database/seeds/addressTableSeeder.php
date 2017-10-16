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

      $limit = 60;

      for ($i = 0; $i < $limit; $i++) {
          address::create([ //,
              'number' => $faker->randomNumber,
              'street' => $faker->streetName,
              'zipcode' => $faker->postcode,
              'city' => $faker->city,
              'flatNumber' => $faker->buildingNumber,
              'floor' => $faker->randomNumber,
              'flatName' => $faker->name,
              'phone' => $faker->isbn10,
              'mobile' =>$faker->isbn10
          ]);

    }
  }
}
