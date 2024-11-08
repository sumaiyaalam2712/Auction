<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;

class AuctionController extends Controller
{
    public function index()
    {
        $car=Car::all();
        $review=Review::all();
          return view('frontend.layout.auction',['cars'=>$car,'reviews'=>$review]);
    }
}