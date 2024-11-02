<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

use function Ramsey\Uuid\v1;

class CarController extends Controller
{
   public function store(Request $request)
   {
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
         $data->other_items=$request->other_items;
         $data->equipment=$request->equipment;
         $data->service_history=$request->service_history;
         $data->ownership_history=$request->ownership_history;
         $data->country=$request->country;
         $data->state=$request->state;
         $data->minimum_price=$request->minimum_price;
         $data->minimum_price_increment=$request->minimum_price_increment;
         $data->start_time=$request->start_time;
         $data->end_time=$request->end_time;
         $data->end_time=$request->end_time;
         $data->save();
         return redirect()->back();
   }
}