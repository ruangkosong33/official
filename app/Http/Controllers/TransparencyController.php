<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Transparency;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransparencyController extends Controller
{
    public function index()
    {
        $transparency=Transparency::all();

        return view('admin.pages.transparency.index-transparency', ['transparency'=>$transparency]);
    }

    public function create()
    {
        return view('admin.pages.transparency.create-transparency');
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

    public function edit(Transparency $transparency)
    {

        return view('admin.pages.transparency.edit-transparency', ['transparency'=>$transparency]);
    }

    public function update(Request $request, Transparency $transparency)
    {
        $this->validate($request, [
            'title_transparency'=>'required',
        ]);

        $transparency->update([
            'title_transparency'=>$request->title_transparency,
            'slug'=>Str::slug($request->title_transparency),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('transparency.index');
    }

    public function destroy(Transparency $transparency)
    {
        $transparency=Transparency::where('id', $transparency->id);

        $transparency->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('transparency.index');
    }
}
