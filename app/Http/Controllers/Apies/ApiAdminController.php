<?php

namespace App\Http\Controllers\Apies;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAdminController extends Controller
{

    public function register(Request $request){
        $field = validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);
        if ($field->fails()) {
       // Handle validation failure, return response or redirect
                return response()->json(['errors' => $field->errors()], 422);
             }

        $data = User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request->input('password')),
            'remember_token'=>$request['remember_token']


        ]);

        $token = $data->createToken('myapptoken')->plainTextToken;
        $response = [
            'token'=>$token,
            'data'=>$data,
        ];
        return response($response,201);
    }

    public function login(Request $request)
    {
        $field = validator::make($request->all(), [
            'email', 'required|email',
            'password' => 'required',
        ]);
        // $field=$request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required',
        // ]);
        $field = $request->all();
        $user = User::where('email', $field['email'])->first();
        if (!$user) {
            return response([
                'message' => 'Credential does not match',
            ], 400);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user ' => $user,
            'token' => $token,
        ];
        return response($response, 201);
    }
}
