<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'id' => 1,
                'name' => 'KRSNA',
                'locality' => 'Church Complex',
                'city' => 'Ranchi',
                'state' => 'Jharkhand',
                'rating' => '5',
                'image_path' => 'public/images/image01.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Kaveri',
                'locality' => 'Church Complex',
                'city' => 'Ranchi',
                'state' => 'Jharkhand',
                'rating' => '4.5',
                'image_path' => 'public/images/image02.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Hill View',
                'locality' => 'Sant Nagar',
                'city' => 'Delhi',
                'state' => 'Delhi',
                'rating' => '4',
                'image_path' => 'public/images/image03.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Radison Blue',
                'locality' => 'Sant Nagar',
                'city' => 'Delhi',
                'state' => 'Delhi',
                'rating' => '3.5',
                'image_path' => 'public/images/image04.jpg',
            ]
        ]);
    }
}
