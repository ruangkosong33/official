<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    public function index()
    {
        $video=Video::with(['category'])->latest()->paginate(7);
        // dd($video[0]);
        return view('admin.pages.video.index-video', ['video'=>$video]);
    }

    public function create()
    {
        $category=Category::all();

        return view('admin.pages.video.create-video', ['category'=>$category]);
    }

    public function store(Request $request)
    {
        $video=$request->validate([
            'title_video'=>'required',
            'image_video'=>'required|mimes:jpg,jpeg,png|max:1000',
        ]);

        if($request->hasFile('image_video'))
        {
            $file=$request->file('image_video');
            $extension=$file->getClientOriginalName();
            $videos=$extension;
            $img=Image::make($file);
            if(Image::make($file))
            {
                $img->resize(770,413);
            }
            $img->save(public_path('uploads/image-video/'.$videos));
        }

        $video=Video::create([
            'title_video'=>$request->title_video,
            'link'=>$request->link,
            'slug'=>Str::slug($request->title_video),
            'image_video'=>$videos,
            'status'=>$request->status,
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
            $file=$request->file('image_video');
            $extension=$file->getClientOriginalName();
            $videos=$extension;
            $img = Image::make($file);
            if (Image::make($file)->width() > 720)
            {
                $img->resize(720, null, function ($constraint) {$constraint->aspectRatio();});
            }
            $img->save(public_path('uploads/image-video'),$videos);
        }

        $video=Video::where('id', $video->id)->update([
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
