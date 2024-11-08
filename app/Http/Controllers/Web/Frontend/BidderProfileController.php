<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;

class BidderProfileController extends Controller
{
    public function index()
    {

        $counts=Car::where('user_id',auth()->user()->id)->count('id');
        $car=Car::where('user_id',auth()->user()->id)->get();
        $review=Review::all();
          return view('frontend.layout.bidder_profile',['reviews'=>$review,'cars'=>$car,'count'=>$counts,'cars'=>$car]);
    }
}