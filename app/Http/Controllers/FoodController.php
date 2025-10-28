<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FoodController extends Controller
{
    /**
     * Get all menu items
     */
    public function index()
    {
        $foods = Food::where('available', true)->get();

        return response()->json([
            'success' => true,
            'data' => $foods,
        ]);
    }
}
