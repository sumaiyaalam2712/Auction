<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Review;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function searchCar(Request $request)
    {
      $review=Review::all();
      $year=$request->year;
      $brand=$request->brand;
      $model=$request->model;
      $price=$request->price;
      $search=Car::where('year','like','%'.$year.'%')
      //->where('brand','like','%'.$brand.'%')
      ->where('model','like','%'.$model.'%')
     ->where('minimum_price','like','%'.$price.'%')
      ->get();
      return view('frontend.layout.search_car',['data'=>$search,'reviews' => $review]);

    }
}