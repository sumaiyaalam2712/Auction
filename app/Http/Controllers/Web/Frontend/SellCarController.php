<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Brand;

class SellCarController extends Controller
{
    public function index()
    {
        $data=Brand::all();
        $review = User::with('reviews')->get();
          return view('frontend.layout.sell_car',['data'=>$data,'reviews'=>$review]);
    }
}