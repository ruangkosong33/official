<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Lkjip;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LkjipController extends Controller
{
    public function index()
    {
        $lkjip=Lkjip::all();

        return view('admin.pages.lkjip.index-lkjip', ['lkjip'=>$lkjip]);
    }

    public function create()
    {
        return view('admin.pages.lkjip.create-lkjip');
    }

    public function store(Request $request)
    {
        $lkjip=$request->validate([
            'title_lkjip'=>'required',
            'year'=>'required',
            'file_lkjip'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_lkjip'))
        {
            $file=$request->file('file_lkjip');
            $extension=$file->getClientOriginalName();
            $lkjips=$extension;
            $file->move('uploads/file=-lkjip', $lkjips);
        }

        $lkjip=Lkjip::create([
            'title_lkjip'=>$request->title_lkjip,
            'slug'=>Str::slug($request->title_lkjip),
            'year'=>$request->year,
            'file_lkjip'=>$lkjips,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('lkjip.index');
    }

    public function edit($id)
    {
        $lkjip=Lkjip::findOrFail($id);

        return view('admin.pages.lkjip.edit-lkjip', ['lkjip'=>$lkjip]);
    }

    public function update(Request $request, $id)
    {
        $lkjip=$request->validate([
            'title_lkjip'=>'required',
            'year'=>'required',
            'file_lkjip'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_lkjip'))
        {
            $file=$request->file('file_lkjip');
            $extension=$file->getClientOriginalName();
            $lkjips=$extension;
            $file->move('uploads/file=-lkjip', $lkjips);
        }

        $lkjip->update([
            'title_lkjip'=>$request->title_lkjip,
            'slug'=>Str::slug($request->title_lkjip),
            'year'=>$request->year,
            'file_lkjip'=>$lkjips,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('lkjip.index');
    }

    public function destroy($id)
    {
        $lkjip=Lkjip::findOrFail($id);

        $lkjip->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
