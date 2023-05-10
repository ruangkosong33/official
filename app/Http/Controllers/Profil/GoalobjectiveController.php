<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Goalobjective;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class GoalobjectiveController extends Controller
{
    public function index()
    {
        $goalobjective=Goalobjective::all();

        return view('admin.pages.goalobjective.index-goalobjective', ['goalobjective'=>$goalobjective]);
    }

    public function create()
    {
        return view('admin.pages.goalobjective.create-goalobjective');
    }

    public function store(Request $request)
    {
        $goalobjective=$request->validate([
            'title_goalobjective'=>'required',
            'description_goalobjective'=>'required',
        ]);

        $goalobjective=Goalobjective::create([
            'title_goalobjective'=>$request->title_goalobjective,
            'slug'=>Str::slug($request->title_goalobjective),
            'description_goalobjective'=>$request->description_goalobjective,

        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('goalobjective.index');
    }

    public function edit($id)
    {
        $goalobjective=Goalobjective::findOrFail($id);

        return view('admin.pages.goalobjective.edit-goalobjective', ['goalobjective'=>$goalobjective]);
    }


    public function update(Request $request, $id)
    {
        $goalobjective=$request->validate([
            'title_goalobjective'=>'required',
            'description_goalobjective'=>'required',
        ]);

        $goalobjective=Goalobjective::findOrFail($id);

        $goalobjective->update([
            'title_goalobjetive'=>$request->title_goalobjective,
            'slug'=>Str::slug($request->title_goalobjective),
            'descrtiption_goalobjetive'=>$request->descrtiption_goalobjetive,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('goalobjective.index');
    }

    public function destroy($id)
    {
        $goalobjective=Goalobjevtive::findOrFail($id);

        $goalobjective->delete();

        Alert::success('Berhasil', 'Data Berhasil Di hapus');

        return redirect()->route('goalobjective.index');
    }
}
