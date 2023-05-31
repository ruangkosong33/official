<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function index()
    {
        $banner=Banner::all();

        return view('admin.pages.banner.index-banner', ['banner'=>$banner]);
    }

    public function create()
    {
        return view('admin.pages.banner.create-banner');
    }

    public function store(Request $request)
    {
        $banner=$request->validate([
            'image_banner'=>'required|mimes:jpeg,jpg,png,svg|max:3000',
        ]);

        if($request->file('image_banner'))
        {
            $file = $request->file('image_banner');
            $extention = $file->getClientOriginalName();
            $imagebanners = time().'.'.$extention;
            $img=Image::make($file);
            if (Image::make($file))
            {
                $img->resize(1920, 1080);
            }
            $img->save(public_path('uploads/image-banner/'). $imagebanners);
        }

        $banner=Banner::create([
            'image_banner'=>$imagebanners,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('banner.index');
    }

    public function edit($id)
    {
        $banner=Banner::findOrFail($id);

        return view('admin.pages.banner.edit-banner', ['banner'=>$banner]);
    }

    public function update(Request $request, $id)
    {
        $banner=$request->validate([
            'image_banner'=>'required|mimes:jpg,jpeg,png|max:3000',
        ]);

        $banner=Banner::findOrFail($id);

        if($request->file('image_banner'))
        {
            $destination = 'uploads/image-banner/'.$banner->image_banner;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image_banner');
            $extention = $file->getClientOriginalName();
            $imagebanners = time().'.'.$extention;
            $file->move('uploads/image-banner/', $imagebanners);
        }

        $banner->update([
            'image_banner'=>$imagebanners,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('banner.index');
    }

    public function destroy($id)
    {
        $banner=Banner::findOrFail($id);

        $destination = 'uploads/image-banner/'.$banner->image_banner;

        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $banner->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('banner.index');
    }
}
