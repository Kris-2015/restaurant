<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodRestaurant extends Model {

    protected $table = 'food_restaurants';

    public static function getTopFoods() {
        return FoodRestaurant::where('rating', '>', 4)->get();
    }
}
