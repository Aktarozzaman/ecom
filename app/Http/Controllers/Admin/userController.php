<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class userController extends Controller
{
    public function userindex()
    {
        //Query builder
    //  $data=DB::table('users')->get();
    //  dd($data);

        //elequent

       $data=User::all();
       
       return view('admin.user.index',compact('data'));

    }
}
