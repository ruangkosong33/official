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

        if($request->file('image_so'))
        {
            $file=$request->file('image_so');
            $imageSo=$file->getClientOriginalName();
            $extension=$imageSo;
            $file->move('uploads/image-so', $imageSo);
        }

        $division=Division::create([
            'name_division'=>$request->name_division,
            'slug'=>Str::slug($request->name_division),
            'image_so'=>$imageSo,
            'deskripsi_so'=>$request->deskripsi_so,
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
        $imageSo = $division->image_so;
        if($request->file('image_so'))
        {
            $file=$request->file('image_so');
            $imageSo=$file->getClientOriginalName();
            $extension=$imageSo;
            $file->move('uploads/image-so', $imageSo);

        }

        $division->update([
            'name_division'=>$request->name_division,
            'slug'=>Str::slug($request->name_division),
            'image_so'=>$imageSo,
            'deskripsi_so'=>$request->deskripsi_so
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
