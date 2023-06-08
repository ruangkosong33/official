<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Skp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SkpController extends Controller
{
    public function index()
    {
        $skp=Skp::all();

        return view('admin.pages.skp.index-skp', ['skp'=>$skp]);
    }

    public function create()
    {
        return view('admin.pages.skp.create-skp');
    }

    public function store()
    {
        $skp=$request->validate([
            'title_skp'=>'required',
            'file_skp'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_skp'))
        {
            $file=$request->file('file_skp');
            $extension=$file->getClientOriginalName();
            $skps=$extension;
            $file->move('uploads/file-skp', $skps);
        }

        $skp=Skp::create([
            'title_skp'=>$request->title_skp,
            'slug'=>Str::slug($request->title_skp),
            'file_skp'=>$skps,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('skp.index');
    }

    public function edit($id)
    {
        $skp=Skp::findOrFail($id);

        return view('admin.pages.skp.edit-skp', ['skp'=>$skp]);
    }

    public function update(Request $request,  $id)
    {
        $skp=$request->validate([
            'title_skp'=>'required',
            'file_skp'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_skp'))
        {
            $file=$request->file('file_skp');
            $extension=$file->getClientOriginalName();
            $skps=$extension;
            $file->move('uploads/file-skp', $skps);
        }

        $skp=Skp::findOrFail($id);

        $skp->update([
            'title_skp'=>$request->title_skp,
            'slug'=>Str::slug($request->title_skp),
            'file_skp'=>$skps,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('skp.index');
    }

    public function destroy($id)
    {
        $skp=Skp::findOrFail($id);

        $skp->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
