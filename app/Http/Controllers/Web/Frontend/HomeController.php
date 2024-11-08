<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
class HomeController extends Controller
{


    public function index()
    {       $review=Review::all();
          return view('frontend.layout.index',['reviews'=>$review]);
    }
}