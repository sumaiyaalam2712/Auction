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
        $about_us=CMS::where('section','About Us')->whereNotNull('description')->first();

        $about_image=CMS::where('section','About Us')->whereNotNull('image')->first();

        $cool_car_auction=CMS::where('title','Cool Car Auctions')->first();
        $low_fees=CMS::where('title','Low Fees')->first();
        $more_information=CMS::where('title','More Information')->first();
        $easy_to_use=CMS::where('title','Easy to Use')->first();
          $buying_car=CMS::where('title','Buying a car')->first();
          $selling_car=CMS::where('title','Selling a car')->first();
          $finalizing_sale=CMS::where('title','Finalizing the Sale')->first();
          $how_it_works_image=CMS::where('section','How it Works')->whereNotNull('image')->first();
          $review = User::with('reviews')->get();
          return view('frontend.layout.cars_and_bids',['about'=>$about_us,'about_photo'=>$about_image,'fees'=>$low_fees,'cool_car'=>$cool_car_auction,'easy_use'=>$easy_to_use,'information'=>$more_information,'buying'=>$buying_car,'selling'=>$selling_car,'finalizing'=>$finalizing_sale,'how_works_image'=>$how_it_works_image,'reviews'=>$review]);
    }
}