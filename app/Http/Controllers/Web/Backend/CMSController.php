<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function create()
    {
          return view('backend.layout.cms.create');
    }
}