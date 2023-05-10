<?php

namespace App\Http\Controllers\Organization;

use App\Models\Division;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

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

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('division.index');
    }

    public function destroy($id)
    {
        $division=Division::findOrFail($id);

        $division->delete();

        Alert::success('Berhasil' ,'Data Berhasil Di Hapus');

        return redirect()->route('division.index');
    }
}
