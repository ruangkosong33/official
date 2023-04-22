<?php

namespace App\Http\Controllers\Bbh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sp2dController extends Controller
{
    public function index()
    {
        $sp2d=Sp2d::all();

        return view('admin.pages.sp2d.index-sp2d', ['sp2d'=>$sp2d]);
    }

    public function create()
    {
        return view('admin.pages.sp2d.create-sp2d');
    }

    public function store(Request $request)
    {
        $sp2d=$request->validate([
            'city_kab'=>'required',
            'title_sp2d'=>'required',
            'file_sp2d'=>'required|mimes:pdf|max:3000',
            'date'=>'nullable',
            'description'=>'nullable',
            'total'=>'nullable',
        ]);

        if($request->file('file_sp2d'))
        {
            $file=$request->file('sp2d');
            $extension=$file->getClientOriginalName();
            $sp2ds=$extension;
            $file->move('uploads/file-sp2d', $sp2ds);
        }

        $sp2d=Sp2d::create([
            'city_kab'=>$request->city_kab,
            'title_sp2d'=>$request->title_sp2d,
            'file_sp2d'=>$sp2ds,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('sp2d.index');
    }

    public function edit(Sp2d $sp2d)
    {
        return view('admin.pages.sp2d.edit-sp2d', ['sp2d'=>$sp2d]);
    }

    public function update(Request $request, Sp2d $sp2d)
    {
        $sp2d=$request->validate([
            'city_kab'=>'required',
            'file_sp2d'=>'required|mimes:pdf|max:3000',
            'date'=>'nullable',
            'description'=>'nullable',
            'total'=>'nullable',
        ]);

        if($request->file('file_sp2d'))
        {
            $file=$request->file('sp2d');
            $extension=$file->getClientOriginalName();
            $sp2ds=$extension;
            $file->move('uploads/file-sp2d', $sp2ds);
        }

        $sp2d->update([
            'city_kab'=>$request->city_kab,
            'file_sp2d'=>$sp2ds,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('sp2d.index');
    }

    public function destroy(Sp2d $sp2d)
    {
        $sp2d=Sp2d::where('id', $sp2d->id);

        $sp2d->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
