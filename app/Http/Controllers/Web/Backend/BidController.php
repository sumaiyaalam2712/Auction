<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bid;
use Carbon\Carbon;

class BidController extends Controller
{
    public function store(Request $request,$id)
    {



        //$request->validate(
            //[
               //'cardholder_name'=>'required',

            //],
           //['required'=>'You must fill the field with VALID information']
            //);
       $max=Bid::max('bid_amount');

      $data=new Bid();
      $data->user_id=auth()->user()->id;
      $data->car_id=$id;
      if($request->bid_amount>($max+50))
      {
      $data->bid_amount=$request->bid_amount;
      }
      else{
        return redirect('/');
      }

      $data->time=Carbon::now();


      $data->save();
      return redirect()->back();
    }
}
