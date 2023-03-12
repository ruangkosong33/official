<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $division=Division::all();

        return view('admin.pages.division.index-division', ['division'=>$division]);
    }

    public function create()
    {
        return view('admin.pages.division.create-division');
    }

    public function store(Request $request)
    {
        $division=$request->validate([
            'name_division'=>'required',
        ]);

        $division=Division::create([
            'name_division'=>$request->name_division,
            'slug'=>Str::slug($request->name_division),
        ]);

        return redirect()->route('division.index');
    }

    public function edit($id)
    {
        $division=Division::findOrFail($id);

        return view('admin.pages.division.edit-division', ['division'=>$division]);
    }

    public function update(Request $request, $id)
    {
        $division=$request->validate([
            'name_division'=>'required',
        ]);

        $division=Division::findOrFail($id);

        $division->update([
            'name_division'=>$request->name_division,
            'slug'=>Str::slug($request->name_division),
        ]);

        return redirect()->route('division.index');
    }

    public function destroy($id)
    {
        $division=Division::findOrFail($id);

        $division->delete();

        return redirect()->route('division.index');
    }
}
