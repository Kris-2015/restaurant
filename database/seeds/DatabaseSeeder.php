<?php

use Illuminate\Database\Seeder;
use Database\Seeds\RestaurantTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RestaurantTableSeeder::class);
    }
}
