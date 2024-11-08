<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Card;
use App\Models\Review;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {

        $review=Review::all();
          return view('frontend.layout.profile',['reviews'=>$review]);
    }


    public function store(Request $request)

    {
        $request->validate(
            [
                'name'=>'required',
                'address'=>'nullable',
               'contact'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
               'biography'=>'required'
            ]

            );
      $data=User::find(auth()->user()->id);

      $data->name=$request->name;
      $data->contact=$request->contact;
      $data->address=$request->address;
      $data->biography=$request->biography;


      $data->save();
      return redirect()->back();
    }

    public function emailStore(Request $request)

    {

        $request->validate(
            [

               'country'=>'nullable|string',
               'city'=>'required'
            ]

            );

      $data=User::find(auth()->user()->id);


      $data->country=$request->country;
      $data->city=$request->city;
      $data->email=$request->email;
      $data->password=Hash::make($request->password);

      $data->save();
      return redirect()->back();
    }

    public function picStore(Request $request)

    {

        $request->validate(
            [

           'profile_pic'=>'image|mimes:jpeg,png,jpg,gif,svg'
            ]

            );

      $data=User::find(auth()->user()->id);

      $imageName = time().'.'.$request->profile_pic->extension();
        $request->profile_pic->move(public_path('images'), $imageName);
      $data->profile_pic=$imageName;

      $data->save();
      return redirect()->back();
    }





    public function cardStore(Request $request)
    {



        $request->validate(
            [
               'cardholder_name'=>'required',
               'card_number'=>'required',
               'expiration_date'=>'required|date',
               'cvv'=>'required',
               'phone_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'billing_address'=>'required'
            ],
            ['required'=>'You must fill the field with VALID information']
            );
      $data=Card::find(auth()->user()->id);
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