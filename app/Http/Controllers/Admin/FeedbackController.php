<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback_show(){
        $data=Feedback::all();
        return view('feedback.feedback_show',compact('data'));
    }
    public function destroy($id){
        $data = FeedBack::find($id)->delete();
        return redirect()->back()->with('error','Deleted Successfully');
    }

}
