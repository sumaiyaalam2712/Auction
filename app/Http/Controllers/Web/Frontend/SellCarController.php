<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

class SellCarController extends Controller
{
    public function index()
    {
        $review = User::with('reviews')->get();
          return view('frontend.layout.sell_car',['reviews'=>$review]);
    }
}
