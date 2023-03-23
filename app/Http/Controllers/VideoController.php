<?php

namespace App\Http\Controllers;

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
            'link_video'=>'required',

        ]);

        return redirect()->route('video.index');
    }

    public function edit($id)
    {
        $video=Video::findOrFail($id);

        return view('admin.pages.video.edit-video', ['video'=>$video]);
    }

    public function destroy($id)
    {
        $video=Video::findOrFail($id);

        $video->delete();

        return redirect()->route('video.index');
    }
}
