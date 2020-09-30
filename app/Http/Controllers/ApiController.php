<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Food;
use App\Models\FoodRestaurant;

class ApiController extends Controller
{
    //
    public function index(Request $request)
    {
        return 'ready for progress';
    }

    /**
     * Function to get all restaurants
     * @param request
     * @return array
     */
    public function getAllRestaurant(Request $request)
    {
        return Restaurant::getAllRestaurant();
    }

    /**
     * Function to get all foods
     * @param request
     * @return array
     */
    public function getAllFoods(Request $request)
    {
        return Food::all();
    }

    /**
     * Function to get all restaurants by city name
     * @param request
     * @return array
     */
    public function getRestaurantByCity(Request $request)
    {
        // TODO: Find by locality name
        // Get the city name
        $city = $request->get('city');
        
        return Restaurant::where('city', $city)->get();
    }

    /**
     * Function to get top restaurants by city name
     * @param request
     * @return array
     */
    public function getTopRestaurantByCity(Request $request)
    {
        $city = $request->get('city');

        return Restaurant::where('city', $city)->where('rating', '>=', 4)->get();
    }

    /**
     * Function to get top five food by city
     * @param request
     * @return array
     */
    public function getTopFiveFoodByCity(Request $request)
    {
        $city = $request->get('city');

        return FoodRestaurant::join(
            'restaurants', 'food_restaurants.restaurant_id', '=', 'restaurants.id'
        )->join('foods', 'food_restaurants.food_id', '=', 'foods.id')
        ->select(
            'restaurants.name',
            'foods.food_name',
            'foods.cuisine',
            'food_restaurants.rating',
            'restaurants.city'
        )
        ->where('food_restaurants.rating', '>', 4)
        ->where('restaurants.city', $city)->limit(5)->get();
    }

    /**
     * Function to get top five food by locality
     * @param request locality, city
     * @return array
     */
    public function getTopFiveFoodByLocality(Request $request)
    {
        $locality = $request->get('locality');
        $city = $request->get('city');

        return FoodRestaurant::join(
            'restaurants', 'food_restaurants.restaurant_id', '=', 'restaurants.id'
        )->join('foods', 'food_restaurants.food_id', '=', 'foods.id')
        ->select(
            'restaurants.name',
            'foods.food_name',
            'foods.cuisine',
            'food_restaurants.rating',
            'restaurants.city',
            'restaurants.locality'
        )
        ->where('food_restaurants.rating', '>', 4)
        ->where('restaurants.city', $city)
        ->where('restaurants.locality', $locality)->limit(5)->get();
    }
}
