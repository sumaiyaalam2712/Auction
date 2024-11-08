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
                        ->addColumn('action', function ($data) {

                            return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                          <a href="' . route('#',  $data->id) . '" type="button" class="text-white btn btn-primary" title="Edit">
                                          <i class="bi bi-pencil"></i>
                                          </a>
                                          <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="text-white btn btn-danger" title="Delete">
                                          <i class="bi bi-trash"></i>
                                        </a>
                                        </div>';
                        })

                        ->addColumn('status', function ($data) {
                            $status = ' <div class="form-check form-switch" style="margin-left:40px;">';
                            $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                            if ($data->status == "active") {
                                $status .= "checked";
                            }
                            $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                            return $status;
                        })


                        ->rawColumns(['action','status'])

                        ->make(true);

            }



            return view('backend.layout.user.index',['user'=>$user]);

        }

}
