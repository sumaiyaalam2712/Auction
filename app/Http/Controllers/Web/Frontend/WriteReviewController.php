<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

class WriteReviewController extends Controller
{
    public function index()
    {
        $review = User::with('reviews')->get();
          return view('frontend.layout.write_review',['reviews'=>$review]);
    }



    public function store(Request $request)
    {

        $request->validate(
            [
               'review'=>'required',
               'star'=>'required'

            ]
            );
      $data=new Review();
      $data->user_id=auth()->user()->id;
      $data->review=$request->review;
      $data->star=$request->star;
      $data->save();
      return redirect()->back();
    }



}