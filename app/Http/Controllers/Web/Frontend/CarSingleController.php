<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarSingleController extends Controller
{
    public function index()
    {
          return view('frontend.layout.car_single');
    }
}