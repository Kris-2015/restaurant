<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            [
                'id' => 1,
                "food_name" => "Chole Bature",
                "cuisine" => "North Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 2,
                "food_name"=> "Briyani",
                "cuisine"=> "North Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 3,
                "food_name"=> "Paneer Masala",
                "cuisine"=> "North Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 4,
                "food_name"=> "Aloo Gobi",
                "cuisine"=> "North Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 5,
                "food_name"=> "Soya Chilli",
                "cuisine"=> "North Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 6,
                "food_name"=> "Masala Dosa",
                "cuisine"=> "South Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 7,
                "food_name"=> "Paneer Dosa",
                "cuisine"=> "South Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 8,
                "food_name"=> "Paneer Masala Dosa",
                "cuisine"=> "South Indian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 9,
                "food_name"=> "Pizza Pugliese",
                "cuisine"=> "Italian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 10,
                "food_name"=> "Pizza Margerita",
                "cuisine"=> "Italian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 11,
                "food_name"=> "Spaghetti",
                "cuisine"=> "Italian",
                "created_at"=> null,
                "updated_at"=> null
            ],
            [
                "id"=> 12,
                "food_name"=> "Pandora",
                "cuisine"=> "Italian",
                "created_at"=> null,
                "updated_at"=> null
            ]
        ]);
    }
}
