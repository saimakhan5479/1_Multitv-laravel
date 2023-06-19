<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                //return redirect()->route('admin.dashboard');
                $admin =  Auth::guard('admin')->user();
                if ($admin->role == 2) {
                    // return redirect()->route('admin.dashboard');
                    return redirect()->route('admin.dashboard')->with('message','You logged in Successfully');
                } else {
                    Auth::guard('admin')->logout();

                    // return redirect()->route('admin.login')->with('error','You are not authorized to access admin page');
                    return redirect()->route('admin.login')->with('warning','You Are Not AUTHORIZED  To Access ADMIN PANEL, Thanks!');
                }
            } else {
                // return redirect()->route('admin.login')->with('error','Email/Password is incorrect');
                return redirect()->route('admin.login')->with('error','Either Email/Password is Incorrect, Please Checked it Again');
            }
        } else {
            return redirect()->route('admin.login')->withErrors($validator)->withInput($request->only('email'));
        }
    }
}
