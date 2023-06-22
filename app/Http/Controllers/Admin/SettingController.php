<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
  public function setting_show(){
    return view('setting.setting_show');

}
public function setting_submit(Request $request){
// dd($request->all());
$data =Setting::updateOrInsert(['key' => 'banner_id'], [
    'value' => $request['banner_id'],
    'status' => $request['banner_status']??"Inactive",
    'created_at' => now(),
    'updated_at' => now(),

]);
$data =Setting::updateOrInsert(['key' => 'inter_id'], [
    'value' => $request['inter_id'],
    'status' => $request['inter_status']??"Inactive",
    'created_at' => now(),
    'updated_at' => now(),
]);

return redirect()->back()->with('message','Setting Successfully Updated!!');

}
}
