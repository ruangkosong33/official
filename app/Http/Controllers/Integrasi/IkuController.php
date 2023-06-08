<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Iku;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class IkuController extends Controller
{
    public function index()
    {
        $iku=Iku::all();

        return view('admin.pages.iku.index-iku',['iku'=>$iku]);
    }

    public function create()
    {
        return view('admin.pages.iku.create-iku');
    }

    public function store(Request $request)
    {
        $iku=$request->validate([
            'title_iku'=>'required',
            'year'=>'required',
            'file_iku'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_iku'))
        {
            $file=$request->file('file_iku');
            $extension=$file->getClientOriginalName();
            $ikus=$extension;
            $file->move('upload/file-iku', $ikus);
        }

        $iku=Iku::create([
            'title_iku'=>$request->title_iku,
            'slug'=>Str::slug($request->title_iku),
            'year'=>$request->year,
            'file_iku'=>$ikus,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('iku.index');
    }

    public function edit($id)
    {
        $iku=Iku::findOrFail($id);

        return view('admin.pages.iku.edit-iku', ['iku'=>$iku]);
    }

    public function update(Request $request, $id)
    {
        $iku=$request->validate([
            'title_iku'=>'required',
            'year'=>'required',
            'file_iku'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_iku'))
        {
            $file=$request->file('file_iku');
            $extension=$file->getClientOriginalName();
            $ikus=$extension;
            $file->move('upload/file-iku', $ikus);
        }

        $iku=Iku::findOrFail($id);

        $iku->update([
            'title_iku'=>$request->title_iku,
            'slug'=>Str::slug($request->title_iku),
            'year'=>$request->year,
            'file_iku'=>$ikus,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('iku.index');
    }

    public function destroy($id)
    {
        $iku=Iku::findOrFail($id);

        $iku->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
