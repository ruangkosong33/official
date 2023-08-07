<?php

namespace App\Http\Controllers\Bbh;

use App\Models\Bbh;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BbhController extends Controller
{
    public function index()
    {
        $bbh=Bbh::latest()->get();

        return view('admin.pages.bbh.index-bbh', ['bbh'=>$bbh]);
    }

    public function create()
    {
        return view('admin.pages.bbh.create-bbh');
    }

    public function store(Request $request)
    {
        $bbh=$request->validate([
            'title_plan'=>'required',
            'year'=>'required',
        ]);

        $bbh=Bbh::create([
            'title_plan'=>$request->title_plan,
            'slug'=>Str::slug($request->title_plan),
            'year'=>$request->year,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('bbh.index');
    }

    public function edit($id)
    {
        $bbh=Bbh::findOrFail($id);

        return view('admin.pages.bbh.edit-bbh', ['bbh'=>$bbh]);
    }

    public function update(Request $request, $id)
    {
        $bbh=$request->validate([
            'title_plan'=>'required',
            'year'=>'required',
        ]);

        $bbh=Bbh::findOrFail($id);

        $bbh->update([
            'title_plan'=>$request->title_plan,
            'slug'=>Str::slug($request->title_plan),
            'year'=>$request->year,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('bbh.index');
    }

    public function destroy($id)
    {
        $bbh=Bbh::findOrFail($id);

        $bbh->delete();

        Alert::success('Berhasil','Data Berhasil Di Hapus');

        return redirect()->back();
    }
}


