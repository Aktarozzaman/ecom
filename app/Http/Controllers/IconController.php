<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{
    public function add(){
        $icon = Icon::all();
        return view('admin.post.icon', compact('icon'));
    }

    public function insert(Request $request){
        $icon = new Icon();
        if($request -> hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/icon',$filename);
            $icon->image = $filename;
        }  
        $icon->name = $request->input('name');
        $icon->slug = $request->input('slug');
        $icon->save();
        return redirect('icon$icon')->with('status', 'Product Added Successfully');
    }
}
