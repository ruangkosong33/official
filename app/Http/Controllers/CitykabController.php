<?php

namespace App\Http\Controllers;

use App\Models\Citykab;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CitykabController extends Controller
{
    public function index()
    {
        $citykab=Citykab::latest()->get();

        return view('admin.pages.citykab.index-citykab', ['citykab'=>$citykab]);
    }

    public function create()
    {
        return view('admin.pages.citykab.create-citykab');
    }

    public function store(Request $request)
    {
        $citykab=$request->validate([
            'name_citykab'=>'required',
        ]);

        $citykab=Citykab::create([
            'name_citykab'=>$request->name_citykab,
            'slug'=>Str::slug($request->name_citykab),
        ]);
        
        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('citykab.index');
    }

    public function edit(Citykab $citykab)
    {
        return view('admin.pages.citykab.edit-citykab', ['citykab'=>$citykab]);
    }

    public function update(Request $request, Citykab $citykab)
    {
        $this->validate($request, [
            'name_citykab'=>'required',
        ]);

        $citykab->update([
            'name_citykab'=>$request->name_citykab,
            'slug'=>Str::slug($request->name_citykab),
        ]);
        
        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('citykab.index');
    }

    public function destroy(Citykab $citykab)
    {
        $citykab=Citykab::where('id', $citykab->id);

        $citykab->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
