<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;
use App\Models\Bid;
use Carbon\Carbon;

class CarSingleController extends Controller
{
    public function index($id)
    {


        $car=Car::find($id);
        $current_time = Carbon::today();
        $end_time = Carbon::parse($car->end_time);
        $left_time = $current_time->diff($end_time)->format('%d days');
        $max=Bid::max('bid_amount');
        $count=Bid::count('bid_amount');


        $cars=Car::all();
        $current_time_all = Carbon::today();
        $end_time_all = Carbon::parse($cars->end_time_all);
        $left_time_all = $current_time_all->diff($end_time_all)->format('%d days');

        $review=Review::all();
       return view('frontend.layout.car_single',['car'=>$car,'max'=>$max,'left_time'=>$left_time,'count'=>$count,'cars'=>$cars,'reviews'=>$review]);
    }
}