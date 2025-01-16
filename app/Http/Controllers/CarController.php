<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        // Fetch cars with related manufacturer
        $cars = Car::with('manufacture')->get();

        // Return the view with data
        return view('car.index', compact('cars'));
    }
}
