<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidderProfileController extends Controller
{
    public function index()
    {
          return view('frontend.layout.bidder_profile');
    }
}