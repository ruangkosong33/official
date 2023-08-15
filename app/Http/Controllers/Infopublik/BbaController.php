<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Bba;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BbaController extends Controller
{
    public function index()
    {
        $bba=Bba::latest()->get();

        return view('admin.pages.bba.index-bba', ['bba'=>$bba]);
    }

    public function create()
    {
        return view('admin.pages.bba.create-bba');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_bba'=>'required',
        ]);

        $bba=Bba::create([
            'category_bba'=>$request->category_bba,
            'slug'=>Str::slug($request->category_bba),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di SImpan');

        return redirect()->route('bba.index');
    }

    public function edit(Bba $bba)
    {
        return view('admin.pages.bba.edit-bba', ['bba'=>$bba]);
    }

    public function update(Request $request, Bba $bba)
    {
        $this->validate($request,[
            'category_bba'=>'required',
        ]);

        $bba->update([
            'category_bba'=>$request->category_bba,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('bba.index');
    }

    public function destroy(Bba $bba)
    {
        $bba=Bba::where('id', $bba->id);

        $bba->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('bba.index');
    }
}
