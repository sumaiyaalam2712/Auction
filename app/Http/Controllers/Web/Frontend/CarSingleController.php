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


        $recents=Car::all();
        foreach($recents as $recent){
        $current_time_recent = Carbon::today();
       $end_time_recent = Carbon::parse($recent->end_time);
       $left_time_recent = $current_time_recent->diff($end_time_recent)->format('%d');
}



      $cars = Car::where('end_time', '<=', Carbon::today()->addDays(3))->get();
        $review=Review::all();
       return view('frontend.layout.car_single',['car'=>$car,'max'=>$max,'left_time'=>$left_time,'count'=>$count,'cars'=>$cars,'left_time_recent'=>$left_time_recent,'reviews'=>$review]);
    }
}