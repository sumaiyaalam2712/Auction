<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\CMS;
class CarBidController extends Controller
{
    public function index()
    {
        $buying_car=CMS::where('title','Buying a car')->get();
          $selling_car=CMS::where('title','Selling a car')->get();
          $finalizing_sale=CMS::where('title','Finalizing the Sale')->get();
        $review=Review::all();
          return view('frontend.layout.cars_and_bids',['buying_car'=>$buying_car,'selling_car'=>$selling_car,'finalizing_sale'=>$finalizing_sale,'reviews'=>$review]);
    }
}