<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_all_restaurant', 'ApiController@getAllRestaurant');
Route::get('/get_all_foods', 'ApiController@getAllFoods');
Route::post('/get_suggestion_by_city', 'ApiController@getRestaurantByCity');
Route::post('/get_top_restaurant_by_city', 'ApiController@getTopRestaurantByCity');
Route::post('/get_top_five_food_by_city', 'ApiController@getTopFiveFoodByCity');
Route::post('/get_top_five_food_by_locality', 'ApiController@getTopFiveFoodByLocality');
