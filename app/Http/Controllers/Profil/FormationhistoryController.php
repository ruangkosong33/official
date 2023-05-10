<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Formationhistory;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class FormationhistoryController extends Controller
{
    public function index()
    {
        $formationhistory=Formationhistory::all();

        return view('admin.pages.formationhistory.index-formationhistory', ['formationhistory'=>$formationhistory]);
    }

    public function create()
    {
        return view('admin.pages.formationhistory.create-formationhistory');
    }

    public function store(Request $request)
    {
        $formationhistory=$request->validate([
            'title_formationhistory'=>'required',
            'description_formationhistory'=>'required',
        ]);

        $formationhistory=Formationhistory::create([
            'title_formationhistory'=>$request->title_formationhistory,
            'slug'=>Str::slug($request->title_formationhistory),
            'description_formationhistory'=>$request->description_formationhistory,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('formationhistory.index');
    }

    public function edit($id)
    {
        $formationhistory=Formationhistory::findOrFail($id);

        return view('admin.pages.formationhistory.edit-formationhistory', ['formationhistory'=>$formationhistory]);
    }

    public function update(Request $request, $id)
    {
        $formationhistory=$request->validate([
            'title_formationhistory'=>'required',
            'description_formationhistory'=>'required',
        ]);

        $formationhistory=Formationhistory::findOrFail($id);

        $formationhistory->update([
            'title_formationhistory'=>$request->title_formationhistory,
            'slug'=>Str::slug($request->title_formationhistory),
            'description_formationhistory'=>$request->description_formationhistory,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');
        
        return redirect()->route('formationhistory.index');
    }

    public function destroy($id)
    {
        $formationhistory=Formatiohistory::findOrFail($id);

        $formationhistory-delete();

        return redirect()->route('formationhistory.index');
    }
}
