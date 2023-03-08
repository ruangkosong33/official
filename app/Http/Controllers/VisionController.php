<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function index()
    {
        $vision=Vision::all();

        return view('admin.pages.vision.index-vision', ['vision'=>$vision]);
    }

    public function create()
    {
        return view('admin.pages.vision.create-vision');

    }

    public function store(Request $request)
    {
        $vision=$request->validate([
            'title_vision'=>'required',
        ]);

        $vision=Vision::create([
            'title_vision'=>$request->title_vision,
            'slug'=>Str::slug($request->title_vision),
            'description_vision'=>$request->description_vision,
        ]);

        return redirect()->route('vision.index');
    }

    public function edit($id)
    {
        $vision=Vision::findOrFail($id);

        return view('admin.pages.vision.edit-vision', ['vision'=>$vision]);
    }

    public function update(Request $request, $id)
    {
        $vision=$request->validate([
            'title_vision'=>'required',
        ]);

        $vision=Vision::findOrFail($id);

        $vision->update([
            'title_vision'=>$request->vision,
            'slug'=>Str::slug($request->vision),
            'description_vision'=>$request->description_vision,
        ]);

        return redirect()->route('vision.index');
    }

    public function destroy($id)
    {
        $vision=Vision::findOrFail($id);

        $vision->delete();

        return redirect()->route('vision.index');
    }
}
