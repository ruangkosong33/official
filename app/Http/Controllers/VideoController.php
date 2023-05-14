<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            'image_video'=>'required|mimes:jpg,jpeg,png|max:1000',
        ]);

        if($request->hasFile('image_video'))
        {
            $file=$request->hasFile('image_video');
            $extension=$file->getClientOriginalName();
            $videos=$extension;
            $file->move('uploads/image-video', $videos);
        }

        $video=Video::create([
            'title_video'=>$request->title_video,
            'slug'=>Str::slug($request->title_video),
            'image_video'=>$videos,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('video.index');
    }

    public function edit(Video $video)
    {
        return view('admin.pages.video.edit-video', ['video'=>$video]);
    }

    public function update(Request $request, Video $video)
    {
        $this->validate($request,[
            'title_video'=>'required',
            'image_video'=>'required|mimes:jpg,jpeg,png|max:1000',
        ]);

        if($request->hasFile('image_video'))
        {
            $file=$request->hasFile('image_video');
            $extension=$file->getClientOriginalName();
            $videos=$extension;
            $file->move('uploads/image-video', $videos);
        }

        $video=Video::wheere('id', $video->id)->update([
            'title_video'=>$request->title_video,
            'slug'=>Str::slug($request->title_video),
            'image_video'=>$videos,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('video.index');
    }

    public function destroy(Video $video)
    {
        $video=Video::findOrFail($video->id);

        $video->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('video.index');

    }
}
