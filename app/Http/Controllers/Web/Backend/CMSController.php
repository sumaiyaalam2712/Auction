<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;

class CMSController extends Controller
{
    public function create()
    {
          return view('backend.layout.cms.create');
    }


    public function store(Request $request)
    {


  $data=new CMS();

  $data->page=$request->page;
  $data->section=$request->section;
  $data->title=$request->title;
  $data->sub_title=$request->sub_title;
  if ($request->hasFile('image') && $request->file('image')->isValid()) {
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('backend/assets/img'), $imageName);
    $data->image = $imageName;
} else {

    $data->image = null;
}
      $data->description=$request->description;
      $data->href=$request->href;
      $data->email=$request->email;
      $data->phone=$request->phone;
      $data->copyright=$request->copyright;

      $data->save();
      return redirect()->back();
    }
}
