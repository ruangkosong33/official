<?php

namespace App\Http\Controllers\Infopublik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $download=Download::all();

        return view('admin.pages.download.index-download', ['download'=>$download]);
    }

    public function create()
    {
        return view('admin.pages.download.create-download');
    }

    public function store(Request $request)
    {
        $download=$request->validate([
            'category_download'=>'required',
        ]);

        $download=Download::create([
            'category_download'=>$request->category_download,
            'slug'=>Str::slug($request->category_download),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('download.index');
    }

    public function edit($id)
    {
        $download=Download::findOrFail($id);

        return view('admin.pages.download.edit-download', ['download'=>$download]);
    }

    public function update(Request $request, $id)
    {
        $download=$request->validate([
            'category_download'=>'required',
        ]);

        $download->update([
            'category_download'=>$request->category_download,
            'slug'=>Str::slug($request->category_download),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('download.index');
    }

    public function destroy($id)
    {
        $download=Download::findOrFail($id);

        $download->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('download.index');
    }
}
