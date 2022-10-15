<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\subcatagory;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Str;
use Image;

class postController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $catagory=Catagory::all();
        return view('admin.post.create',compact('catagory'));
    }
    //store post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcatagory_id' => 'required',
            'tags' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $catagoryid=DB::table('subcatagories')->where('id',$request->subcatagory_id)->first()->catagory_id;

        $slug=Str::of($request->title)->slug('-');
       $data=array();
       $data['catagory_id']=$catagoryid;
       $data['subcatagory_id']=$request->subcatagory_id;
       $data['title']=$request->title;
       $data['slug']=$slug;
       $data['post_date']=$request->post_date;
       $data['tags']=$request->tags;
       $data['description']=$request->description;
       $data['user_id']=Auth::id();
       $data['status']=$request->status;
       $photo=$request->image;
       
       if($photo){
        $photoname=$catagoryid.'.'.$photo->getClientOriginalExtension();//slug.jpg
        dd($photo);
        Image::make($photo)->save('aktar'.$photoname);
       
        $data['photo']='public/media/'.$photoname;
        //
        
        DB::table('posts')->insert($data);
        return redirect()->back()->with('success', 'Image Successfully inserted');
       }else{
        return redirect()->back()->with('Image not inserted');
       }
       
      
    }
}
