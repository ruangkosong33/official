<?php

namespace App\Http\Controllers;

use App\Models\Pad;
use App\Models\Filepad;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PadController extends Controller
{
    public function index()
    {
        $pad=Pad::all();

        return view('admin.pages.pad.index-pad', ['pad'=>$pad]);
    }

    public function create()
    {
        return view('admin.pages.pad.create-pad');
    }

    public function store(Request $request)
    {
        $pad=$request->validate([
            'title_pad'=>'required',
        ]);

        $pad=Pad::create([
            'title_pad'=>$request->title_pad,
            'slug'=>Str::slug($request->title_pad),
        ]);

        return redirect()->route('pad.index');
    }

    public function edit($id)
    {
        $pad=Pad::findOrFail($id);

        return view('admin.pages.pad.edit-pad', ['pad'=>$pad]);
    }

    public function update(Request $request, $id)
    {

        $pad=$request->validate([
            'title_pad'=>'required',
        ]);

        $pad=Pad::findOrFail($id);

        $pad->update([
            'title_pad'=>$request->title_pad,
            'slug'=>Str::slug($request->title_pad),
        ]);

        return redirect()->route('pad.index');
    }

    public function destroy($id)
    {
        $pad=Pad::findOrFail($id);

        $pad->delete();

        return redirect()->route('pad.index');
    }

}
