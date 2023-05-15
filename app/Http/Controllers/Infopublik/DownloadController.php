<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Download;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function edit(Download $download)
    {
        return view('admin.pages.download.edit-download', ['download'=>$download]);
    }

    public function update(Request $request, Download $download)
    {
        $this->validate($request,[
            'category_download'=>'required',
        ]);

        $download->update([
            'category_download'=>$request->category_download,
            'slug'=>Str::slug($request->category_download),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('download.index');
    }

    public function destroy(Download $download)
    {
        $download=Download::where('id', $download->id);

        $download->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('download.index');
    }
}
