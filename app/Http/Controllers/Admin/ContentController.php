<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\ImgStub;

class ContentController extends Controller
{
    public function content_add()
    {
        $categories = Category::where('status', 'Active')->get();
        // dd('abc');
        return view('content.content_add', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'ordering' => 'required',
            'overview' => 'required',
            'link' => 'required',
            // 'status'=>'required',
        ]);
        // dd($request->all());
        $image_name = null;
        if ($request->hasFile('file')) {
            $image = $request->file;
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('all_images', $image_name);
        }

        $data = Content::create([
            // $data = new Content();([])
            'name' => $request['name'],
            'category_id' => $request['category'],
            'ordering' => $request['ordering'],
            'overview' => $request['overview'],
            'link' => $request['link'],
            'status' => $request['status'] ?? 'Inactive',
            'live' => $request['live'] ?? '0',
            'poster_image' => $request['poster_image'] ?? null,
            'image' => $image_name,
            // $data->save();
        ]);
        // dd($request->all());
        return redirect('content/content_show')->with('message', 'Data Added Successfully');
    }
    public function content_show()
    {
        $data = Content::all();
        return view('content.content_show', compact('data'));
    }
    public function destroy($id)
    {
        $data = Content::find($id)->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }
    public function update($id)
    {
        $data = Content::find($id);
        $categories = Category::where('status', 'Active')->get();
        return view('content.content_update', compact('data','categories'));
    }
    public function edit($id, Request $request)
    {
        $data = Content::find($id);
        $data->name = $request['name'];
        $data->category_id = $request['category'];
        $data->link = $request['link'];
        $data->overview = $request['overview'];
        $data->ordering = $request['ordering'];
        $data->status = $request['status'] ?? 'Inactive';
        $data->live = $request['live'] ?? '0';
        $data->poster_image = $request['poster_image'];
        $image = $request->file;
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('all_images', $image_name);
            $data->image = $image_name;
        }
        // dd($data);

        $data->save();
        return redirect('content/content_show')->with('info', 'Data Updated Successfully');
    }
    public function updateStatus(Request $request)
    {
        $contentt = Content::find($request->id);
        $contentt->status = $contentt->status === 'Active' ? 'Inactive' : 'Active';
        $contentt->save();
        return response()->json(['success' => true, 'message' => 'Status changed successfully']);
    }
    public function updateLive(Request $request)
    {
        $content = Content::find($request->id);
        $content->live = $content->live === '1' ? '0' : '1';
        $content->save();
        return response()->json(['success' => true, 'message' => 'Status changed successfully']);
    }
}
