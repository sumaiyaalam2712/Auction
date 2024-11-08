<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class SellCarController extends Controller
{
    public function index()
    {
        $review=Review::all();
          return view('frontend.layout.sell_car',['reviews'=>$review]);
    }
}