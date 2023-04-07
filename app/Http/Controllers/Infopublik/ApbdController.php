<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Apbd;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class ApbdController extends Controller
{
    public function index()
    {
        $apbd=Apbd::with('City')->get();

        return view('admin.pages.apbd.index-apbd', ['apbd'=>$apbd]);
    }

    public function create()
    {
        return view('admin.pages.apbd.create-apbd');
    }

    public function store(Request $request)
    {
        $apbd=$request->validate([
            'periode'=>'required',
            'year'=>'required',
        ]);

        $apbd=Apbd::create([
            'periode'=>$request->periode,
            'slug'=>Str::slug($request->periode),
            'year'=>$request->year,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('apbd.index');
    }

    public function edit($id)
    {
        $apbd=Apbd::findOrFail($id);

        return view('admin.pages.apbd.edit-apbd', ['apbd'=>$apbd]);
    }

    public function update(Request $request, $id)
    {
        $apbd=$request->validate([
            'periode'=>'required',
            'year'=>'required',
        ]);

        $apbd=Apbd::findOrFail($id);

        $apbd->update([
            'periode'=>$request->periode,
            'slug'=>Str::slug($request->periode),
            'year'=>$request->year,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('apbd.index');
    }

    public function destroy($id)
    {
        $apbd=Apbd::findOrFail($id);

        $apbd->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('apbd.index');
    }

}
