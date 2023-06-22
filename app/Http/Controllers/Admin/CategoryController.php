<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function category_add(){
        return view('admin.category_add');
    }

    public function category_submit(Request $request){
       $request->validate([
        'name'=>'required',
        'ordering'=>'required',
        // 'status'=>'required',

       ]
    );

        $data = new Category();
        $data->name=$request['name'];
        $data->ordering=$request['ordering'];
        $data->status= $request['status']??'Inactive';
        $data->save();
       return redirect('category/category_show')->with('message','Category Data added Successfully');
    }

    public function category_show(){
        $data = Category::all();
        return view('admin.category_show',compact('data'));
    }

    public function category_smt_show(){
        $data = Category::all();
        return view('admin.category_show',compact('data'));
    }
    public function category_delete($id){

        $data = Category::find($id)->delete();
        // return view('admin.category_add');
        return redirect()->back()->with('error','Category Data Deleted Successfully!');
    }

    public function category_update($id){
        $up = category::find($id);
        return view('admin.category_update',compact('up'));
    }

    public function category_edit(Request $request ,$id ){
        // dd($request->all());
                    $data =category::find($id);
                    $data->name=$request['name'];
        $data->ordering=$request['ordering'];
        $data->status= $request['status']??'Inactive';
        $data->save();
        return redirect('/category/category_smt_show')->with('info','Category Data Updated Successfully');
        // return view('admin.category_show');
    }


    public function updateStatus(Request $request)
{
    $category = Category::find($request->id);
    $category->status = $category->status === 'Active' ? 'Inactive' : 'Active';
    $category->save();

    return response()->json(['success' => true,'message' => 'Category Status changed successfully']);
}


}
