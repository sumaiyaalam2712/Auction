<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
          return view('frontend.layout.profile');
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

}