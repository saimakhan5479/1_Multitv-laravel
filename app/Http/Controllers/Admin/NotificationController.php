<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{


    public function notification_add(){
        return view('notification.notification_add');
    }


    public function store(Request $request){
            $request->validate([
                'title'=>'required',
                'message'=>'required',
                // 'image'=>'sometimes|nullable|image|mimes:jpeg,png,jpg,gif',
            ]);
            $image_name= null;
            if($request->hasFile('file')){

                $image=$request->file;
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $request->file->move('all_images',$image_name);

             }


        $data = Notification::create([
            'title'=>$request['title'],
            'message'=>$request['message'],
            'send_date'=>now(),
            'image'=>$image_name,

        ]);
        $d=compact('data');
        return redirect('/notification/notification_show')->with('message','Data Added successfully');
    }


    public function notification_show(){
        $data=Notification::all();
        return view('notification.notification_show',compact('data'));
    }

    public function destroy($id){
        $data = Notification::find($id)->delete();
        return redirect()->back();
    }
}
