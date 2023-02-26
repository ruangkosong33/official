<?php

namespace App\Http\Controllers;

use App\Models\Pad;
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
            'description_pad'=>'required',
            'file_pad'=>'required|mimes:pdf,jpg,jpeg,doc,docx,png|max:5000',
        ]);

        $pad=Pad::create([
            'title_pad'=>$request->title_pad,
            'slug'=>Str::slug($request->title_pad),
            'description_pad'=>$request->description_pad,
            'file_pad'=>$file_pad,
        ]);

        return redirect()->route('pad.index');

    }

    public function edit($id)
    {
        $pad=findOrFail($id);

        return view('admin.pages.pad.edit-pad', ['pad'=>$pad]);
    }

    public function update(Request $request, $id)
    {
        
    }
}
