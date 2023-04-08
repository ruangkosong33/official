<?php

namespace App\Http\Controllers\Integrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenstraController extends Controller
{
    public function index()
    {
        $renstra=Renstra::all();

        return view('admin.pages.renstra.index-renstra', ['renstra'=>$renstra]);
    }

    public function create()
    {
        return view('admin.pages.renstra.create-renstra');
    }

    public function store(Request $request)
    {
        $renstra=$request->validate([
            'title_renstra'=>'required',
            'file_renstra'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_renstra'))
        {
            $file=$request->file('file_renstra');
            $extension=$file-getClientOriginalName();
            $renstras=$extension;
            $file->move('uploads/file-renstra', $renstras);
        }

        $renstra=Renstra::create([
            'title_renstra'=>$request->title_renstra,
            'slug'=>Str::slug($request->title_renstra),
            'file_renstra'=>$renstras,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('renstra.index');
    }

    public function edit($id)
    {
        $renstra=Renstra::findOrFail($id);

        return view('admin.pages.renstra.edit-renstra', ['renstra'=>$renstra]);
    }

    public function update(Request $request, $id)
    {
        $renstra=$request->validate([
            'title_renstra'=>'required',
            'file_renstra'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_renstra'))
        {
            $file=$request->file('file_renstra');
            $extension=$file-getClientOriginalName();
            $renstras=$extension;
            $file->move('uploads/file-renstra', $renstras);
        }

        $renstra=Renstra::findOrFail($id);

        $renstra->update([
            'title_renstra'=>$request->title_renstra,
            'slug'=>Str::slug($request->title_renstra),
            'file_renstra'=>$renstras,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('renstra.index');
    }

    public function destroy($id)
    {
        $renstra=Renstra::findOrFail($id);

        $renstra->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}

