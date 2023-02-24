<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Http\Controller\Controllers;

class SopController extends Controller
{
    public function index()
    {
        $sop=Sop::latest()->paginate(7);

        return view('admin.pages.sop.index-sop');
    }

    public function create()
    {
        return view('admin.pages.sop.create-sop');
    }

    public function store(Request $request)
    {
        $sop=$request->validate([
            'title_sop'=>'required',
            'description_sop'=>'required',
            'image_sop'=>'required|mimes:jpeg,jpg,svg,png|max"3000',
            'file_sop'=>'required|mimes:pdf,doc,xls',
        ]);

        if($request->file('image_sop'))
        {
            $file=$request->file('image_sop');
            $extension=$file->getClientOriginalName();
        }
        $sop=Sop::create([
            'title_sop'=>$request->title_sop,
            'slug'=>Str::slug($request->title_sop),
            'description_sop'=>$request->description_sop,

        ]);

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
            'title_sop'=>$request->title_sop,
            'slug'=>Str::slug($request->title_sop),
            'description_sop'=>$request->description_sop,

        ]);

        $sop=Sop::findOrFail($id);

        if($request->file('image_sop'))
        {
            $file=$request->file('image_sop');
            $extension=$file->getClientOriginalName();
        }

        return redirect()->route('sop.index');
    }

    public function destroy($id)
    {
        $sop=Sop::findOrFail($id);

        $sop->delete();

        return redirect()->route('sop.index');
    }
}
