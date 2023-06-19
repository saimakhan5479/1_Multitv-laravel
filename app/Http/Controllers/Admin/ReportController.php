<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   public function report_show(){
    $data = Report::all();
    return view('report.report_show',compact('data'));
   }
   public function destroy($id){
    $d = Report::find($id)->delete();
    return redirect()->back()->with('error','Data Deleted Successfully');
   }
}
