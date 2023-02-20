<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/image-banner/', $filename);
        }

        $banner=Banner::create([
            'image_banner'=>$filename,
        ]);

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
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/image-banner/', $filename);
        }

        $banner->update([
            'image_banner'=>$filename,
        ]);

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

        return redirect()->route('banner.index');
    }
}
