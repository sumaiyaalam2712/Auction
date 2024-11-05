<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardInformationController extends Controller
{
    public function store(Request $request)
    {



        $request->validate(
            [
               'cardholder_name'=>'required',
               'card_number'=>'required',
               'expiration_date'=>'required|date',
               'cvv'=>'required',
               'phone_number'=>'required',
                'billing_address'=>'required'
            ],
            ['required'=>'You must fill the field with VALID information']
            );
      $data=new Card();
      $data->user_id=auth()->user()->id;
      $data->cardholder_name=$request->cardholder_name;
      $data->card_number=$request->card_number;
      $data->expiration_date=$request->expiration_date;
      $data->cvv=$request->cvv;
      $data->billing_address=$request->billing_address;
      $data->phone_number=$request->phone_number;


      $data->save();
      return redirect()->back();
    }
}