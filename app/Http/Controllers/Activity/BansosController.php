<?php

namespace App\Http\Controllers\Activity;

use App\Models\Bansos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class BansosController extends Controller
{
    public function index()
    {
        $bansos=Bansos::all();

        return view('admin.pages.bansos.index-bansos', ['bansos'=>$bansos]);
    }

    public function create()
    {
        return view('admin.pages.bansos.create-bansos');
    }

    public function store(Request $request)
    {
        $bansos=$request->validate([
            'title_bansos'=>'required',
            'file_bansos'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_bansos'))
        {
            $file=$request->file('file_bansos');
            $extension=$file->getClientOriginalName();
            $bansoss=$extension;
            $file->move('uploads/file-bansos', $bansoss);
        }

        $bansos=Bansos::create([
            'title_bansos'=>$request->title_bansos,
            'slug'=>Str::slug($request->title_bansos),
            'file_bansos'=>$filebansoss,
        ]);

        Alert::success('Berhasil', 'Data Telah Di Simpan');

        return redirect()->route('bansos.index');
    }

    public function edit($id)
    {
        $bansos=Bansos::findOrFail($id);

        return view('admin.pages.bansos.edit-bansos', ['bansos'=>$bansos]);
    }

    public function update(Request $request, $id)
    {
        $bansos=$request->validate([
            'title_bansos'=>'required',
            'file_bansos'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_bansos'))
        {
            $file=$request->file('file_bansos');
            $extension=$file->getClientOriginalName();
            $bansoss=$extension;
            $file->move('uploads/file-bansos', $bansoss);
        }

        $bansos=Bansos::findOrFail($id);

        $bansos->update([
            'title_bansos'=>$request->title_bansos,
            'slug'=>Str::slug($request->title_bansos),
            'file_bansos'=>$filebansoss,
        ]);

        Alert::success('Berhasil', 'Data Telah Di Update');

        return redirect()->route('bansos.index');
    }

    public function destroy($id)
    {
        $bansos=Bansos::findOrFail($id);

        $bansos->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('bansos.index');
    }
}
