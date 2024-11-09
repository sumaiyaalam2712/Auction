<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request )
        {

            $user= User::where('role','User')->count('id');
            if ($request->ajax()) {

                $data=User::where('role','User')->orderBy('name','asc')->get();

                return Datatables::of($data)

                        ->addIndexColumn()


                        ->make(true);

            }



            return view('backend.layout.user.index',['user'=>$user]);

        }

}