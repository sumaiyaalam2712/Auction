<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellCarController extends Controller
{
    public function index()
    {
          return view('frontend.layout.sell_car');
    }
}