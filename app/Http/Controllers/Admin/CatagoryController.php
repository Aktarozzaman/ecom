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
        $catagory->catagory_slug=Str::of($request->catagory_slug)->slug('-');
       $catagory->save();


    //    $notification=array('message'=>'Catagory Inserted','alert-type'=>'success');

    //    return redirect()->back()->with('$notification');

         return redirect()->back()->with('success', 'Successfully inserted');
    }
    public function edit($id)
    {
       // $data=DB::table('catagories')->where('id',$id)->first();
       $data=Catagory::where('id',$id)->first();
        return view('admin.catagory.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $catagory=Catagory::where('id',$id)->first();
        // $catagory=Catagory::update([
        //     'catagory_name' => $request->catagory_name,
        //      'catagory_slug' => Str::of($request->catagory_name)->slug('-'),

        // ]);
        $catagory->catagory_name=$request->catagory_name;
       // $catagory->catagory_slug=$request->catagory_slug;
        $catagory->catagory_slug=Str::of($request->catagory_slug)->slug('-');
       $catagory->save();

      // $catagory->update();

      return redirect()->back()->with('sucess', 'Sucessfully Updated');
    
    }
    public function distroy($id)
    {
        //DB::table('catagories')->where('id',$id)->delete();
        //$catagory=Catagory::where('id',$id);
        //$catagory->delete();
        Catagory::destroy($id);
        
        return redirect()->back()->with('success', 'Successfully Deleted');
    }
    

    
}
