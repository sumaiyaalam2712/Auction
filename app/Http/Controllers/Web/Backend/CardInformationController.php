<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardInformationController extends Controller
{
    public function store(Request $request)
    {
      $data=new Card();
      $data->user_id=auth()->user()->id;
      $data->cardholder_name=$request->cardholder_name;
      $data->card_number=$request->card_number;
      $data->expiration_date=$request->expiration_date;
      $data->cvv=$request->cvv;
      $data->billing_address=$request->billing_address;
      $data->phone_number=$request->status;
      $data->status=$request->cardholder_name;

      $data->save();
      return redirect()->back();
    }
}