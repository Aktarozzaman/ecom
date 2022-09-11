<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class CatagoryController extends Controller
{
    public function index()
    {
        //Query builder
    //    $catagory=DB::table('catagories')->get();

        //elequent

       $catagory=Catagory::all();
       return view('admin.catagory.index',compact('catagory'));

    }
    public function create()
    {
      return view('admin.catagory.create');
    }
    //store mathod
    public function store(Request $request)
    {
        $validated = $request->validate([
            'catagory_name' => 'required|unique:catagories',
            'catagory_slug' => 'required',
            
        ]);

        // $data = array(
        //     'catagory_name' => $request->catagory_name,
        //     'catagory_slug' => $request->catagory_slug,
            
        // );
        // DB::table('catagories')->insert($data);
        $catagory=new Catagory;
        $catagory->catagory_name=$request->catagory_name;
        $catagory->catagory_slug=Str::of($request->catagory_name)->slug('-');
       $catagory->save();

        return redirect()->back()->with('sucess', 'Sucessfully inserted');
    }
    //edit mathod
    public function update( Request $request,$id)
    {
       
    

    }
}
