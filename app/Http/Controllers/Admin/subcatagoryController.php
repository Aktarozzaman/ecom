<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\subcatagory;
use DB;
use Illuminate\Support\Str;

class subcatagoryController extends Controller
{
    public function create()
    {
        $catagories = Catagory::all();
        return view('admin.subcatagory.create', compact('catagories'));
    }
    
    public function index()
    {
    //join catagory table with sub catagory models 

        $data=subcatagory::all();
        
       return view('admin.subcatagory.index',compact('data'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'catagory_name'=>'required',
            'subcatagory_name' => 'required|unique:subcatagories',
            'subcatagory_slug' => 'required',
            
        ]);
        $subcatagory=new subcatagory;
        //$data variable -> database coloum name -> $request -> textfield name 
        $subcatagory->catagory_id=$request->catagory_name;
        $subcatagory->subcatagory_name=$request->subcatagory_name;
        $subcatagory->subcatagory_slug=Str::of($request->subcatagory_slug)->slug('-');
         $subcatagory->save();
       

        return redirect()->back()->with('success','Successfully Inserted Subcatagories');

    }
    public function edit($id)
    {
      
       $catagory=Catagory::all();
       $data=subcatagory::find($id);
        return view('admin.subcatagory.edit',compact('catagory','data'));
    }
    public function update(Request $request,$id)
    {
        $subcatagory=subcatagory::find($id)->first();
        $subcatagory->catagory_id=$request->catagory_id;

        $subcatagory->subcatagory_name=$request->subcatagory_name;
       
        $subcatagory->subcatagory_slug=Str::of($request->subcatagory_slug)->slug('-');
       
       $subcatagory->save();

      return redirect()->back()->with('sucess', 'Sucessfully Updated');
    
    }
    public function distroy($id)
    {
        
        subcatagory::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted');


       
    }
    
}
