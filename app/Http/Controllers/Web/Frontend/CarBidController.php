<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarBidController extends Controller
{
    public function index()
    {
          return view('frontend.layout.cars_and_bids');
    }
}