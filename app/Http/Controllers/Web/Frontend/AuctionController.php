<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
          return view('backend.layout.auction');
    }
}