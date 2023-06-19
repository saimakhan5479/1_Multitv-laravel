<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {

        $admin =  Auth::guard('admin')->user();
        $count = Content::where('live', '1')->where('status', 'Active')->count();
        return view('admin.dashboard', compact('count'));
        // echo 'welcome '. $admin->name. '<a href="'.route('admin.logout').'">Logout </a>';
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function change_password()
    {
        return view('admin.change_password');
    }


    public function update_password(Request $request)
    {

            $validateData = $request->validate([

            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);
        $user= Auth::guard('admin')->user();
        $old_password = $user->password;


        // $hash_password = Auth::User();
        if (Hash::check($request->new_password,$old_password)) {
            session()->flash('error', 'New Password Should not be Same as Old Password');
            return redirect()->back();
        } else {
            $users = User::find($user->id);
            $users->password = bcrypt($request->new_password);
            $users->save();

            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        }

}
}
