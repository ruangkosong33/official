<?php

namespace App\Http\Controllers\Profil;

use App\Models\Structure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class StructureController extends Controller
{
    public function index()
    {
        $structure=Structure::latest()->get();

        return view('admin.pages.structure.index-structure', ['structure'=>$structure]);
    }

    public function create()
    {
        return view('admin.pages.structure.create-structure');
    }

    public function store(Request $request)
    {
        $structure=$request->validate([
            'title_structure'=>'required',
            'image_structure'=>'mimes:jpg|max:6000',
        ]);

        if($request->file('image_structure'))
        {
            $file=$request->file('image_structure');
            $extension=$file->getClientOriginalName();
            $structures=$extension;
            $file->move('uploads/image-structure', $structures);
        }

        $structure=Structure::create([
            'title_structure'=>$request->title_structure,
            'slug'=>Str::slug($request->title_structure),
            'image_structure'=>$structures,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('structure.index');
    }

    public function edit(Structure $structure)
    {
        return view('admin.pages.structure.edit-structure', ['structure'=>$structure]);
    }

    public function update(Request $request, Structure $structure)
    {
        $this->validate($request, [
            'title_structure'=>'required',
            'image_structure'=>'mimes:jpeg,png,jpg',
        ]);

        if($request->file('image_structure'))
        {
            $file=$request->file('image_structure');
            $extension=$file->getClientOriginalName();
            $structures=$extension;
            $file->move('uploads/image_structure', $structures);
        }

        $structure=Structure::create([
            'title_structure'=>$request->title_structure,
            'slug'=>Str::slug($request->title_struture),
            'image_structure'=>$structures,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('structure.index');
    }

    public function destroy(Structure $structure)
    {
        $structure=Structure::where('id', $structure->id)->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('structure.index');
    }
}
