<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\CMS;
use App\Models\User;
class CarBidController extends Controller
{
    public function index()
    {
        $about_us=CMS::where('title','About Us')->first();
        $cool_car_auction=CMS::where('title','Cool Car Auctions')->first();
        $low_fees=CMS::where('title','Low Fees')->first();
          $buying_car=CMS::where('title','Buying a car')->first();
          $selling_car=CMS::where('title','Selling a car')->first();
          $finalizing_sale=CMS::where('title','Finalizing the Sale')->first();
          $review = User::with('reviews')->get();
          return view('frontend.layout.cars_and_bids',['about'=>$about_us,'fees'=>$low_fees,'cool_car'=>$cool_car_auction,'buying'=>$buying_car,'selling'=>$selling_car,'finalizing'=>$finalizing_sale,'reviews'=>$review]);
    }
}