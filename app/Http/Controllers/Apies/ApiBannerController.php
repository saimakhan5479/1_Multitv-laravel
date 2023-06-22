<?php

namespace App\Http\Controllers\Apies;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiBannerController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'live_tv' => 'required',
            'title' => 'required',
            'ordering' => 'required',
            'description' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $data = [
                'live_tv' => $request->live_tv,
                'title' => $request->title,
                'ordering' => $request->ordering,
                'description' => $request->description,
                'status' => $request->status ?? 'active',
                'poster_image' => $request->poster_image,
                'image' => $request->image,
            ];

        if($request->has('image')){

            $image=$request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('all_images');
           $imagee=  $image->move($path,$name);
           $data['image']=$name;
         }
            DB::beginTransaction();
            try {
                $user = Banner::create($data);
                DB::commit();
            } catch (\Exception $error) {
                DB::rollBack();
                return ($error->getmessage());
                $user = null;
            }
            if ($user != null) {
                return response()->json([
                    'message' => 'User Registered Successfully',
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Internal Server Error Exists',
                ], 400);
            }
        }
    }


    public function show($id){
        $banner = Banner::find($id);
        if(is_null($banner)){
            $response = [
                'message'=>'No Banner Exists',
                'status'=>0,
            ];
        }
        else{
        $banner->image=$banner->image?asset('all_images').'/'.$banner->image:"";
            $response = [
                'message'=>'Banner Found',
                'status'=>1,
                'data'=>$banner,
            ];
        }
        return response()->json($response, 200);
    }


    public function get_all(){
        $banner = Banner::all();
        if(count($banner)>0){
            return response()->json([
                'message'=>count($banner).'User are Exists',
                'status'=>1,
                'data'=>$banner,
            ]);
        }
        else{
            return response()->json([
                'message'=>count($banner).'No user Found',
                'status'=>0,
            ]);
        }
    }
}
