<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index()
    {
        $aset=Aset::all();

        return view('admin.pages.aset.index-aset', ['aset'=>$aset]);
    }

    public function create()
    {
        return view('admin.pages.aset.create-aset');

    }

    public function store(Request $request)
    {
        $aset=$request->validate([
            'title_aset'=>'required',
            'description_aset'=>'required',
            'filename_aset'=>'required|mimes:jpeg,jpg,pdf,doc,docx,pdf|max:5000',
        ]);

        $aset=Aset::create([
            'title_aset'=>$request->title_aset,
            'slug'=>Str::slug($request->title_aset),
            'description_aset'=>$request->description_aset,
            'filename_pad'=>$request->filename_pad,
        ]);

        return redirect()->route('aset.index');
    }

    public function edit($id)
    {
        $aset=Aset::findOrFail($id);

        return view('admin.pages.aset.edit-aset', ['aset'=>$aset]);
    }

    public function update(Request $request, $id)
    {
        $aset=$request->validate([
            'title_aset'=>'required',
            'description_aset'=>'required',
            'filename_aset'=>'required|mimes:png,jpg,pdf,doc,docx',
        ]);

        $aset->update([
            'title_aset'=>$request->title_aset,
            'slug'=>Str::slug($request->title_aset),
            'description_aset'=>$request->description_aset,
            'filename'=>$request->filaname,
        ]);


        return redirect()->route('aset.index');
    }

    public function destroy($id)
    {
        $aset=Aset::findOrFail($id);

        $aset->delete();

        return redirect()->route('aset.index');
    }
}
