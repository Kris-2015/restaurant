<?php

use Illuminate\Database\Seeder;

class FoodRestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_restaurants')->insert([
            [
                'food_id' => 1,
                'restaurant_id' => 1,
                'rating' => 5,
            ],
            [
                'food_id' => 1,
                'restaurant_id' => 2,
                'rating' => 5,
            ],
            [
                'food_id' => 1,
                'restaurant_id' => 3,
                'rating' => 5,
            ],
            [
                'food_id' => 1,
                'restaurant_id' => 4,
                'rating' => 5,
            ],
            [
                'food_id' => 2,
                'restaurant_id' => 4,
                'rating' => 3.5,
            ],
            [
                'food_id' => 3,
                'restaurant_id' => 2,
                'rating' => 4.5,
            ],
            [
                'food_id' => 3,
                'restaurant_id' => 4,
                'rating' => 4.5,
            ],
            [
                'food_id' => 2,
                'restaurant_id' => 4,
                'rating' => 3.5,
            ],
            [
                'food_id' => 11,
                'restaurant_id' => 2,
                'rating' => 4.5,
            ],
            [
                'food_id' => 10,
                'restaurant_id' => 3,
                'rating' => 4.5,
            ]
        ]);
    }
}
