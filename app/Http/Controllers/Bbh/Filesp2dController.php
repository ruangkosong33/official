<?php

namespace App\Http\Controllers\Bbh;

use App\Models\Citykab;
use App\Models\Filesp2d;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class Filesp2dController extends Controller
{
    public function index()
    {
        $filesp2d=Filesp2d::with('citykab')->get();

        return view('admin.pages.filesp2d.index-sp2d', ['filesp2d'=>$filesp2d]);
    }

    public function create()
    {
        $city=Citykab::all();
        return view('admin.pages.filesp2d.create-sp2d', ['city'=>$city]);
    }

    public function store(Request $request)
    {
        $filesp2d=$request->validate([
            'city_id'=>'required',
            'title_sp2d'=>'required',
            'file_sp2d'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
            'date'=>'required',
            'description'=>'required',
            'total'=>'required',
        ]);

        if($request->file('file_sp2d'))
        {
            $file=$request->file('file_sp2d');
            $extension=$file->getClientOriginalName();
            $filesp2ds=time().'.'.$extension;
            $file->move('uploads/file-sp2d', $filesp2ds);
        }

        $filesp2d=Filesp2d::create([
            'citykab_id'=>$request->city_id,
            'title_sp2d'=>$request->title_sp2d,
            'slug'=>Str::slug($request->title_sp2d),
            'file_sp2d'=>$filesp2ds,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
            'description'=>'', //TODO: change later
            'total'=>0,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filesp2d.index', );
    }

    public function edit($id)
    {
        $city=Citykab::all();
        $filesp2d=Filesp2d::findOrFail($id);

        return view('admin.pages.filesp2d.edit-filesp2d', ['filesp2d'=>$filesp2d, 'city'=>$city]);
    }

    public function update(Request $request, $id)
    {
        $filesp2d=$request->validate([
            'title_sp2d'=>'required',
            'file_sp2d'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
            'date'=>'required',
            'description'=>'required',
            'total'=>'required',
        ]);

        if($request->file('file_sp2d'))
        {
            $file=$request->file('file_sp2d');
            $extension=$file->getClientOriginalName();
            $filesp2ds=$extension;
            $file->move('uploads/file-sp2d', $filesp2ds);
        }

        $filesp2d->update([
            'city_id'=>$city->id,
            'title_sp2d'=>$request->title_sp2d,
            'filesp2d'=>$filesp2ds,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('fileublisp2d.index', ['city'=>$city]);
    }

    public function destroy($id)
    {
        $filesp2d=Filesp2d::findOrFail($id);

        $filesp2d->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Filesp2d $filesp2d)
    {
        $filepath=public_path("uploads/file-sp2d/{$filesp2d->file_sp2d}");

        return response()->download($filepath);
    }
}
