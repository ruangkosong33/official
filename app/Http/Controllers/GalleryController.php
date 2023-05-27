<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery=Gallery::with('category')->latest()->paginate(7);

        return view('admin.pages.gallery.index-gallery', ['gallery'=>$gallery]);
    }

    public function create()
    {
        $category=Category::all();

        return view('admin.pages.gallery.create-gallery', ['category'=>$category]);
    }

    public function store(Request $request)
    {
        $gallery=$request->validate([
            'title_gallery'=>'required',
            'image_gallery'=>'required|mimes:jpg,jpeg,png|max:4000',
        ]);

        if($request->file('image_gallery'))
        {
            $file=$request->file('image_gallery');
            $gallerys=$file->getClientOriginalName();
            $extension=$gallerys;
            $file->move('uploads/image-gallery', $gallerys);
        }

        $gallery=Gallery::create([
            'category_id'=>$request->category_id,
            'title_gallery'=>$request->title_gallery,
            'slug'=>Str::slug($request->title_gallery),
            'image_gallery'=>$gallerys,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $category=Category::all();

        $gallery=Gallery::findorFail($id);

        return view('admin.pages.gallery.edit-gallery', ['category'=>$category, 'gallery'=>$gallery]);
    }

    public function Update(Request $request, $id)
    {
        $gallery=$request->validate([
            'title_gallery'=>'required',
            'image_gallery'=>'required|mimes:jpg,jpeg,png|max:4000',
        ]);

        $gallery=Gallery::findOrFail($id);

        if($request->file('image_gallery'))
        {
            $file=$request->file('image_gallery');
            $gallerys=$file->getClientOriginalName();
            $extension=$gallerys;
            $file->move('uploads/image-gallery', $gallerys);
        }

        $gallery->update([
            'category_id'=>$category->id,
            'title_gallery'=>$request->title_gallery,
            'slug'=>Str::slug($request->title_gallery),
            'image_gallery'=>$gallerys,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $gallery=Gallery::findOrFail($id);

        $gallery->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
