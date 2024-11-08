<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;

class CarSingleController extends Controller
{
    public function index($id)
    {


        $car=Car::find($id);
        $review=Review::all();
          return view('frontend.layout.car_single',['car'=>$car,'reviews'=>$review]);
    }
}