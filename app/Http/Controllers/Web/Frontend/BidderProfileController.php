<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;
use Carbon\Carbon;
use App\Models\User;

class BidderProfileController extends Controller
{
    public function index()
    {

        $counts=Car::where('user_id',auth()->user()->id)->count('id');
        //$cars=Car::all();

        //$current_time = Carbon::today();

        //foreach ($cars as $car) {
            //$end_time = Carbon::parse($car->end_time);
            //$left_time = $current_time->diff($end_time)->format('%d days');
        //}

        $cars = Car::where('user_id',auth()->user()->id)->get();
        $current_time = Carbon::today();
        $left_times = [];
        foreach ($cars as $car) {
            $end_time = Carbon::parse($car->end_time);
            $left_time = $current_time->diff($end_time)->format('%d days');
            $left_times[] = [
                'car_id' => $car->id,
                'left_time' => $left_time
            ];
        }
        $review = User::with('reviews')->get();
          return view('frontend.layout.bidder_profile',['reviews'=>$review,'cars'=>$cars,'count'=>$counts,'left_times' => $left_times]);
    }
}