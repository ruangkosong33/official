<?php

namespace App\Http\Controllers\Profil;

use App\Models\Vision;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VisionController extends Controller
{
    public function index()
    {
        $vision=Vision::all();

        return view('admin.pages.vision.index-vision', ['vision'=>$vision]);
    }

    public function create()
    {
        return view('admin.pages.vision.create-vision');

    }

    public function store(Request $request)
    {
        $vision=$request->validate([
            'title_vision'=>'required',
            'description_vision'=>'required',
        ]);

        $vision=Vision::create([
            'title_vision'=>$request->title_vision,
            'slug'=>Str::slug($request->title_vision),
            'description_vision'=>$request->description_vision,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('vision.index');
    }

    public function edit($id)
    {
        $vision=Vision::findOrFail($id);

        return view('admin.pages.vision.edit-vision', ['vision'=>$vision]);
    }

    public function update(Request $request, $id)
    {
        $vision=$request->validate([
            'title_vision'=>'required',
            'description_vision'=>'required',
        ]);

        $vision=Vision::findOrFail($id);

        $vision->update([
            'title_vision'=>$request->title_vision,
            'slug'=>Str::slug($request->title_vision),
            'description_vision'=>$request->description_vision,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('vision.index');
    }

    public function destroy($id)
    {
        $vision=Vision::findOrFail($id);

        $vision->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('vision.index');
    }
}
