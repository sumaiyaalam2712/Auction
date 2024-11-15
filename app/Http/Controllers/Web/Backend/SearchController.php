<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Review;
use App\Models\User;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function searchCar(Request $request)
    {
        $review = User::with('reviews')->get();
      $year=$request->year;
      $brand=$request->brand;
      $model=$request->model;
      if($request->price_range=="10to20"){
        $min_price=10000;
        $max_price=20000;
      }
      elseif($request->price_range=="20to30"){
        $min_price=20000;
        $max_price=30000;
      }
      elseif($request->price_range=="30to40"){
        $min_price=30000;
        $max_price=40000;
      }
      elseif($request->price_range=="40to50"){
        $min_price=40000;
        $max_price=50000;
      }
      elseif($request->price_range=="below10"){
        $min_price=0;
        $max_price=10000;
      }
      elseif($request->price_range=="above50"){
        $min_price=50000;
        $max_price=10000000;
      }
      elseif($request->price_range==""){
        $min_price="";
        $max_price="";
      }

      if(!empty($year) && !empty($model) && !empty($price_range))
      {
        $search=Car::where('year',$year)
        ->where('model','like','%'.$model.'%')
        ->whereBetween('minimum_price',[$min_price,$max_price])
        ->orderBy('minimum_price','desc')
        ->get();
      }


     else{
        $search=Car::where('year',$year)
        ->orWhere('model','like','%'.$model.'%')
        ->orWhereBetween('minimum_price',[$min_price,$max_price])
        ->orderBy('minimum_price','desc')
        ->get();

     }
      return view('frontend.layout.search_car',['data'=>$search,'reviews' => $review]);

    }
}