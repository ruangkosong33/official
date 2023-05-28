<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Sidata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SidataController extends Controller
{
    public function index()
    {
        $sidata=Sidata::all();

        return view('admin.pages.sidata.index-sidata', ['sidata'=>$sidata]);
    }

    public function create()
    {
        return view('admin.pages.sidata.create-sidata');
    }

    public function store(Request $request)
    {
        $sidata=$request->validate([
            'title_sidata'=>'required',
            'file_sidata'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_sidata'))
        {
            $file=$request->file('file_sidata');
            $extension=$file->getClientOriginalName();
            $sidatas=$extension;
            $file->move('uploads/file-sidata', $sidatas);
        }

        $sidata=Sidata::create([
            'title_sidata'=>$request->title_sidata,
            'slug'=>Str::slug($request->title_sidata),
            'file_sidata'=>$sidatas,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('sidata.index');
    }

    public function edit($id)
    {
        $sidata=Sidata::findOrFail($id);

        return view('admin.pages.sidata.edit-sidata', ['sidata'=>$sidata]);
    }

    public function update(Request $request, $id)
    {
        $sidata=$request->validate([
            'title_sidata'=>'required',
            'file_sidata'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_sidata'))
        {
            $file=$request->file('file_sidata');
            $extension=$file->getClientOriginalName();
            $sidatas=$extension;
            $file->move('uploads/file-sidata', $sidatas);
        }

        $sidata=Sidata::findOrFail($id);

        $sidata->update([
            'title_sidata'=>$request->title_sidata,
            'slug'=>Str::slug($request->title_sidata),
            'file_sidata'=>$sidatas,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('sidata.index');
    }

    public function destroy($id)
    {
        $sidata=Sidata::findOrFail($id);

        $sidata->delete();

        Alert::success('Berhasil','Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Sidata $sidata)
    {
        $filepath=public_path("/uploads/file-sidata/{$sidata->file_sidata}");

        return response()->download($filepath);
    }
}


