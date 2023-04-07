<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Transparency;
use Illuminate\Http\Request;

class TransparencyController extends Controller
{
    public function index()
    {
        $transparency=Transparency::all();

        return view('admin.pages.transparency.index-transparency', ['transparency'=>$transparency]);
    }

    public function create()
    {
        return view('admin.pages.transpareny.create-transparency');
    }

    public function store(Request $request)
    {
        $transparency=$request->validate([
            'title_transparency'=>'required',
        ]);

        $transparency=Transparency::create([
            'title_transparency'=>$request->title_transparency,
            'slug'=>Str::slug($request->title_transparenyc),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('transparency.index');
    }

    public function edit($id)
    {
        $transparency=Transparency::findOrFail($id);

        return view('admin.pages.transparecny.edit-transpareny', ['transparency'=>$transparency]);
    }

    public function update(Request $request, $id)
    {
        $transparency=$request->validate([
            'title_transparency'=>'required',
        ]);

        $transparency->update([
            'title_transparency'=>$request->title_transparency,
            'slug'=>Str::slug($request->title_transparenyc),
        ]);

        $transparency=Transparency::findOrFail($id);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('transparency.index');
    }

    public function destroy($id)
    {
        $transparency=Transparency::findOrFail($id);

        $transparency->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('transparency.index');
    }
}
