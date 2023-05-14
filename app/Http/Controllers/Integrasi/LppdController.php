<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Lppd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LppdController extends Controller
{
    public function index()
    {
        $lppd=Lppd::all();

        return view('admin.pages.lppd.index-lppd', ['lppd'=>$lppd]);
    }

    public function create()
    {
        return view('admin.pages.lppd.create-lppd');
    }

    public function store(Request $request)
    {
        $lppd=$request->validate([
            'title_lppd'=>'required',
            'year'=>'required',
            'file_lppd'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_lppd'));
        {
            $file=$request->file('file_lppd');
            $extension=$file->getClientOriginalName();
            $lppds=$extension;
            $file->move('uploads/file-lppd', $lppds);
        }

        $lppd=Lppd::create([
            'title_lppd'=>$request->title_lppd,
            'slug'=>Str::slug($request->title_lppd),
            'year'=>$request->year,
            'file_lppd'=>$lppds,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('lppd.index');
    }

    public function edit($id)
    {
        $lppd=Lppd::findOrFail($id);

        $filepath=public_path("uploads/file-lppd");

        return view('admin.pages.lppd.edit-lppd', compact('lppd', 'filepath'));
    }

    public function update(Request $request, $id)
    {
        $lppd=$request->validate([
            'title_lppd'=>'required',
            'year'=>'required',
            'file_lppd'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_lppd'));
        {
            $file=$request->file('file_lppd');
            $extension=$file->getClientOriginalName();
            $lppds=$extension;
            $file->move('uploads/file-lppd', $lppds);
        }

        $lppd=Lppd::findOrFail($id);

        $lppd->update([
            'title_lppd'=>$request->title_lppd,
            'slug'=>Str::slug($request->title_lppd),
            'year'=>$request->year,
            'file_lppd'=>$lppds,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('lppd.index');
    }

    public function destroy($id)
    {
        $lppd=Lppd::findOrFail($id);

        $lppd->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->back();
    }

    public function download(Lppd $lppd)
    {
        $filepath=public_path("uploads/file-lppd/{$lppd->file_lppd}");

        return response()->download($filepath);
    }
}
