<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class WriteReviewController extends Controller
{
    public function index()
    {
          return view('frontend.layout.write_review');
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