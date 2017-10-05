<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VehiclesSeeder::class);
        $this->call(addressTableSeeder::class);
        $this->call(PilgrimsSeeder::class);
        $this->call(GitesSeeder::class);
        $this->call(InvoicesSeeder::class);
        $this->call(LuggagesSeeder::class);
    }
}
