<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model {

    protected $table = 'foods';

    public static function getAllFoods() {
        return Food::all();
    }
}
