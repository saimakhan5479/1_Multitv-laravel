<?php

namespace App\Http\Controllers\Apies;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiContentController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'category'=>'required',
            'ordering'=>'required',
            'link'=>'required',
            'overview'=>'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(),400);
        }
        else{
            $data = [
                'name'=>$request->name,
                'category'=>$request->category,
                'ordering'=>$request->ordering,
                'status'=>$request->status ?? 'Active',
                'live'=>$request->live ?? '0',
                'link'=>$request->link ,
                'overview'=>$request->overview,
                'poster_image'=>$request->poster_image,
                'image'=>$request->image,

            ];
            if($request->has('image')){
                $image=$request->image;
                $name= time().'.'.$image->getClientOriginalExtension();
                $path = public_path('all_images');
                $imagee = $image->move($path,$name);
                $data['image']=$name;
            }
            DB::beginTransaction();
            try{
                $user = Content::create($data);
                DB::commit();

            }
            catch(\Exception $error){
                DB::rollBack();
                return ($error->getMessage());
                $user = null;

            }
            if($user != null){
                return response()->json([
                    'message'=>'User Registered Successfully ln Content Model',


                ],200);
            }
            else{
                return response()->json([
                    'message'=>'Internal Server Error Exists',
                ],500);
            }
        }

    }


    public function show($id){
        $content = Content::find($id);
        if(is_null ($content)){
        $response =[
            'message'=>'No Cotent Found',
            'status'=>0,
        ];
    }
    else{
        $content->image=$content->image?asset('all_images').'/'.$content->image:"";
        $response = [
            'message'=>'Cotent Exists',
            'data'=>$content,
            'status'=>1,
        ];
    }
    return response()->json($response,200);
    }


    public function get_all(){

        $content =  Content::all();

        if(count($content)>0){
            $response =[
                'message'=>count($content).'User are Exists',
                'status'=>1,
                'data'=>$content,
            ];

        }
        else{
            $response=[
                'message'=>count($content).'No User Exists',
                'status'=>0,
            ];
        }
        return response()->json($response,200);
    }
}
