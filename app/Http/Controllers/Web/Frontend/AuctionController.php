<?php
namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;
use Carbon\Carbon;

class AuctionController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(2);
        $current_time = Carbon::today();

        foreach ($cars as $car) {
            $end_time = Carbon::parse($car->end_time);
            $left_time = $current_time->diff($end_time)->format('%d days');
        }
        $review = Review::all();
        return view('frontend.layout.auction', ['cars' => $cars,'left_time' => $left_time,'reviews' => $review]);
    }

}