<?php

namespace App\Http\Controllers\Integrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenjaController extends Controller
{
    public function index()
    {
        $renja=Renja::all();

        return view('admin.pages.renja.index-renja', ['renja'=>$renja]);
    }

    public function create()
    {
        return view('admin.pages.renja.create-renja');
    }

    public function store(Request $request)
    {
        $renja=$request->validate([
            'title_renja'=>'required',
            'year'=>'required',
            'file_renja'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_renja'))
        {
            $file=$request->file('file_renja');
            $extension=$file->getClientOriginalName();
            $renjas=$extension;
            $file->move('uploads/file-renja', $renjas);
        }

        $renja=Renja::create([
            'title_renja'=>$request->title_renja,
            'slug'=>Str::slug($request->title_renja),
            'file_renja'=>$renjas,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('renja.index');
    }

    public function edit($id)
    {
        $renja=Renja::findOrFail($id);

        return view('admin.pages.renja.edit-renja', ['renja'=>$renja]);
    }

    public function update(Request $request, $id)
    {
        $renja=$request->validate([
            'title_renja'=>'required',
            'year'=>'required',
            'file_renja'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_renja'))
        {
            $file=$request->file('file_renja');
            $extension=$file->getClientOriginalName();
            $renjas=$extension;
            $file->move('uploads/file-renja', $renjas);
        }

        $renja=Renja::findOrFail($id);

        $renja->update([
            'title_renja'=>$request->title_renja,
            'slug'=>Str::slug($request->title_renja),
            'file_renja'=>$renjas,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('renja.index');
    }

    public function destroy($id)
    {
        $renja=Renja::findOrFail($id);

        $renja->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
