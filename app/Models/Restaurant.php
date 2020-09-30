<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model {

    protected $table = 'restaurants';

    public static function getAllRestaurant() {
        return Restaurant::all();
    }
}
