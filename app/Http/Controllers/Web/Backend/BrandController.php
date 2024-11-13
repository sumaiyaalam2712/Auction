<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function create()
    {
          return view('backend.layout.brand.create');
    }



    public function store(Request $request)
    {

        $request->validate(
            [
               'name'=>'required|unique:brands,name',

            ],
            ['name.required'=>'Fill the field with an original Car brand',
            'name.unique'=>'Create a new Car brand, It is already in store']
            );


      $data=new Brand();
      $data->name=$request->name;

      $data->save();
      return redirect()->back();
    }
}