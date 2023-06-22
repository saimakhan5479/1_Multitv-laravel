<?php

namespace App\Http\Controllers\Apies;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class ApiConCatController extends Controller
{
    public function concat(){

        $concat =  Category::with('contents')->get();

        if(count($concat)>0){
            $response =[
                'message'=>count($concat).'Found',
                'status'=>1,
                'data'=>$concat,
            ];

        }
        else{
            $response=[
                'message'=>count($concat).'Nothing Exists',
                'status'=>0,
            ];
        }
        return response()->json($response,200);
    }
    }
