<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback_create(){
        return view('feedback.feedback_add');
    }

    public function feedback_store(Request $request){
        $request->validate([
         'email'=>'required|email',
         'subject'=>'required',
         'message'=>'required',

        ]
     );

         $data = new Feedback();
         $data->email=$request['email'];
         $data->subject=$request['subject'];
         $data->message= $request['message'];
         $data->save();
        return redirect('feedback/feedback_show')->with('message','Data added Successfully');
     }
    public function feedback_show(){
        $data=Feedback::all();
        return view('feedback.feedback_show',compact('data'));
    }
    public function destroy($id){
        $data = FeedBack::find($id)->delete();
        return redirect()->back()->with('error','Deleted Successfully');
    }

}
