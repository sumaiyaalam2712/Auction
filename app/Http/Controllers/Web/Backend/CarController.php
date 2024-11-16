<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Carbon\Carbon;
use function Ramsey\Uuid\v1;

class CarController extends Controller
{
   public function store(Request $request)
   {
    $request->validate(
        [

         'owner_name'=>'required',
           'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
           'title'=>'required',
           'vin_number'=>'nullable',
           'brand_id'=>'required',
           'year'=>'required',
           'model'=>'required',
           'make'=>'nullable',
           'engine'=>'required',
           'drive_train'=>'required',
           'transmission'=>'required',
           'mileage'=>'required',
           'body_style'=>'required',
           'interior_color'=>'required',
           'exterior_color'=>'required',
           'description'=>'required',
           'modification_status'=>'required',
           'service_history'=>'required',
           'ownership_history'=>'required',
           'country'=>'required',
           'state'=>'required',
           'minimum_price'=>'required'

        ],
        ['required'=>'Fill with valid information']
        );

         $data=new Car();
         $data->user_id=auth()->user()->id;
         $data->owner_name=$request->owner_name;
         $data->phone=$request->phone;
         $data->title=$request->title;
         $data->brand_id=$request->brand_id;
         $data->vin_number=$request->vin_number;
         $data->year=$request->year;
         $data->make=$request->make;
         $data->model=$request->model;
         $data->engine=$request->engine;
         $data->drive_train=$request->drive_train;
         $data->transmission=$request->transmission;
         $data->mileage=$request->mileage;
         $data->body_style=$request->body_style;
         $data->interior_color=$request->interior_color;
         $data->exterior_color=$request->exterior_color;
         $data->description=$request->description;
         $data->highlight=$request->highlight;
         $data->modification_status=$request->modification_status;
         $data->equipment=$request->equipment;
         $data->service_history=$request->service_history;
         $data->ownership_history=$request->ownership_history;
         $data->country=$request->country;
         $data->state=$request->state;
         $data->minimum_price=$request->minimum_price;
         $data->end_time=Carbon::today()->addDays(7);
         $data->save();
         return redirect()->back();
   }
}