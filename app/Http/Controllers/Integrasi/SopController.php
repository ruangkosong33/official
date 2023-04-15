<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Sop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class SopController extends Controller
{
    public function index()
    {
        $sop=Sop::all();

        return view('admin.pages.sop.index-sop', ['sop'=>$sop]);
    }

    public function create()
    {
        return view('admin.pages.sop.create-sop');
    }

    public function store(Request $request)
    {
        $sop=$request->validate([
            'title_sop'=>'required',
        ]);

        $sop=Sop::create([
            'title_sop'=>$request->title_sop,
            'slug'=>Str::slug($request->title_sop),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('sop.index');
    }

    public function edit($id)
    {
        $sop=Sop::findOrFail($id);

        return view('admin.pages.sop.edit-sop', ['sop'=>$sop]);
    }

    public function update(Request $request, $id)
    {
        $sop=$request->validate([
            'title_sop'=>'required',
        ]);

        $sop=Sop::findOrFail($id);

        $sop->update([
            'title_sop'=>$request->title_sop,
            'slug'=>Str::slug($request->title_sop),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('sop.index');
    }

    public function destroy($id)
    {
        $sop=Sop::findOrFail($id);

        $sop->delete();

        Alert::success('Berhasil','Data Berhasil Di Hapus');

        return redirect()->route('sop.index');
    }
}
