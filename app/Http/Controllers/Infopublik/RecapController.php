<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Recap;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RecapController extends Controller
{
    public function index()
    {
        $recap=Recap::latest()->get();

        return view('admin.pages.recap.index-recap', ['recap'=>$recap]);
    }

    public function create()
    {
        return view('admin.pages.recap.create-recap');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'periode'=>'required',
            'year'=>'required',
        ]);

        $recap=Recap::create([
            'periode'=>$request->periode,
            'slug'=>Str::slug($request->periode),
            'year'=>$request->year
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('recap.index');
    }

    public function edit(Recap $recap)
    {
        return view('admin.pages.recap.edit-recap', ['recap'=>$recap]);
    }

    public function update(Request $request, Recap $recap)
    {
        $this->validate($request,[
            'periode'=>'required',
            'year'=>'required',
        ]);

        $recap->update([
            'periode'=>$request->periode,
            'slug'=>Str::slug($request->periode),
            'year'=>$request->year
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('recap.index');
    }

    public function destroy(Recap $recap)
    {
        $recap=Recap::where('id', $recap->id)->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('recap.index');
    }
}
