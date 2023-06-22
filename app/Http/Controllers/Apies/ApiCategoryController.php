<?php

namespace App\Http\Controllers\Apies;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    public function show($id){
        $category = Category::find($id);
        if(is_null($category)){
            $response = [
                'message'=>'No Category Exists',
                'status'=>0,
            ];
        }
        else{
            $response =
            [
                'message'=>'Category Found',
                'status'=>1,
                'data'=>$category,
            ];
        }
        return response()->json($response, 200);


    }
    public function get_all(){
        $category = Category::all();
        if(count($category)){
            return response()->json([
                'message'=>count($category).'Categories Found',
                'status'=>1,
                'data'=>$category,
            ]);
        }
        else{
            return response()->json([
                'message'=>count($category).'No Category Exists',
                'status'=>0,
                
            ]);
        }
    }
}
