<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{


public function banner_add(){
    return view('banner.banner_add');
}
public function store(Request $request){
    $request->validate([
        'live_tv'=>'required',
        'title'=>'required',
        'description'=>'required',
        'ordering'=>'required',
        // 'status'=>'required',

    ]);


    $image_name= null;
    if($request->hasFile('file')){

        $image=$request->file;
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('all_images',$image_name);

     }
    $data = Banner::create([
        'live_tv'=>$request['live_tv'],
        'title'=>$request['title'],
        'description'=>$request['description'],
        'ordering'=>$request['ordering'],
        'status'=> $request['status']??'Inactive',
        'poster_image'=> $request['poster_image']?? null,
        'image'=> $image_name,
    ]);

    return redirect('/banner/banner_show')->with('message','Data Added Successfully');
}
public function banner_show(){
    $data = Banner::all();

    return view('banner.banner_show',compact('data'));
    }
    public function destroy($id){
        $data = Banner::find($id)->delete();
        return redirect()->back()->with('error','Data Deleted Successfully');
    }
    public function update($id){
        $data = Banner::find($id);
        return view('banner.banner_update',compact('data'));
    }
    public function edit($id, Request $request){
        $data = Banner::find($id);
        $data->live_tv=$request['live_tv'];
        $data->title=$request['title'];
        $data->description=$request['description'];
        $data->ordering=$request['ordering'];
        $data->status= $request['status']??'Inactive';
        $data->poster_image=$request['poster_image'];
        $image = $request->file;

        if($image){
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('all_images',$image_name);
            $data->image=$image_name;
        }
        $data->save();
        return redirect('/banner/banner_show')->with('info','Data Updated Successfully');
    }
    public function updateStatus(Request $request)
    {
        $banner = Banner::find($request->id);
        $banner->status = $banner->status === 'Active' ? 'Inactive' : 'Active';
        $banner->save();

        return response()->json(['success' => true,'message' => 'Status changed successfully']);
    }
}
