<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;
use App\Models\User;
use App\Models\CMS;

use Carbon\Carbon;
class HomeController extends Controller
{


    public function index()

    {

        $auction_completed=CMS::where('section','Why Cars & Bids')->where('title','Auctions completed')->first();

        $value_car_sold=CMS::where('section','Why Cars & Bids')->where('title','Value of cars sold')->first();
        $sell_percentage=CMS::where('section','Why Cars & Bids')->where('title','Sell-through rate')->first();
        $registered_member=CMS::where('section','Why Cars & Bids')->where('title','Registered members')->first();;
        $cars = Car::paginate(2);
        $current_time = Carbon::today();

        foreach ($cars as $car) {
            $end_time = Carbon::parse($car->end_time);
            $left_time = $current_time->diff($end_time)->format('%d days');
        }
        $review = User::with('reviews')->get();
          return view('frontend.layout.index',['cars' => $cars,'left_time' => $left_time,'auction_completion' => $auction_completed,'value_sold' => $value_car_sold,'sell_percent' => $sell_percentage,'register_member' => $registered_member,'reviews' => $review]);
    }
}