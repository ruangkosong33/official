<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Support\Str;
use Illuminate\Http\Controller\Controllers;
use Illuminate\Http\Request;
use App\Models\Formationhistory;

class FormationhistoryController extends Controller
{
    public function index()
    {
        $formationhistory=Formationhistory::all();

        return view('admin.pages.formationhistory.create-history', ['history'=>$formationhistory]);
    }

    public function create()
    {
        return view('admin.pages.formationhistory.create-history');
    }

    public function store(Request $request)
    {
        $formationhistory=$request->validate([
            'title_formationhistory'=>'required',
            'description_formationhistory'=>'required',
        ]);

        $formationhistory=Formationhistory::create([
            'title_formationhistoy'=>$request->formationhistory,
            'slug'=>Str::slug($request->formationhistory),
            'description_formationhistory'=>$request->formationhistory,
        ]);

        return redirect()->route('formationhistory.index');
    }

    public function edit($id)
    {
        $formationhistory=Formationhistory::findOrFail($id);

        return view('adnin.pages.formationhsitory.edit-formationhistory', ['formationhistory'=>$formationhistory]);
    }

    public function update(Request $request, $id)
    {
        $formationhistory=$request->validate([
            'title_formationhistory'=>'required',
            'description_formationhistory'=>'required',
        ]);

        $formationhistory=Formationhistory::findOrFail($id);

        $formationhistory->update([
            'title_formationhistoy'=>$request->formationhistory,
            'slug'=>Str::slug($request->formationhistory),
            'description_formationhistory'=>$request->formationhistory,
        ]);

        return redirect()->route('formationhistory.index');
    }

    public function destroy($id)
    {
        $formationhistory=Formatiohistory::findOrFail($id);

        $formationhistory-delete();

        return redirect()->route('formationhistory.index');
    }
}
