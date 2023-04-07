<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $video=Video::all();

        return view('admin.pages.video.index-video', ['video'=>$video]);
    }

    public function create()
    {
        return view('admin.pages.video.create-video');
    }

    public function store(Request $request)
    {
        $video=$request->validate([
            'title_video'=>'required',
            'image_video'=>'mimes:jpg,png|max:2048',
            'link'=>'required',
            'status'=>'required',

        ]);

        if($request->file('image_video'))
        {
            $file=$request->file('image_video');
            $extension=$file->getClientOriginalName();
            $vidoes=$extension;
            $file->move('uploads/image-video', $vidoes);
        }

        $video=Video::create([
            'title_video'=>$request->title_video,
            'slug'=>Str::slug($request->title_video),
            'image_video'=>$videos,
            'link'=>$request->link,
            'status'=>$request->status,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('video.index');
    }

    public function edit($id)
    {
        $video=Video::findOrFail($id);

        return view('admin.pages.video.edit-video', ['video'=>$video]);
    }

    public function update(Request $request, $id)
    {

        if($request->file('image_video'))
        {
            $file=$request->file('image_video');
            $extension=$file->getClientOriginalName();
            $vidoes=$extension;
            $file->move('uploads/image-video', $vidoes);
        }

        $video->update([
            'title_video'=>$request->title_video,
            'slug'=>Str::slug($request->title_video),
            'image_video'=>$videos,
            'link'=>$request->link,
            'status'=>$request->status,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('video.index');
    }

    public function destroy($id)
    {
        $video=Video::findOrFail($id);

        $video->delete();

        return redirect()->route('video.index');
    }
}
