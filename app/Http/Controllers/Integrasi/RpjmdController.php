<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Rpjmd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RpjmdController extends Controller
{
    public function index()
    {
        $rpjmd=Rpjmd::all();

        return view('admin.pages.rpjmd.index-rpjmd', ['rpjmd'=>$rpjmd]);
    }

    public function create()
    {
        return view('admin.pages.rpjmd.create-rpjmd');
    }

    public function store(Request $request)
    {
        $rpjmd=$request->validate([
            'title_rpjmd'=>'required',
            'year'=>'required',
            'file_rpjmd'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_rpjmd'))
        {
            $file=$request->file('file_rpjmd');
            $extension=$file->getClientOriginalName();
            $rpjmds=$extension;
            $file->move('uploads/file-rpjmd', $rpjmds);
        }

        $rpjmd=Rpjmd::create([
            'title_rpjmd'=>$request->title_rpjmd,
            'slug'=>Str::slug($request->title_rpjmd),
            'year'=>$request->year,
            'file_rpjmd'=>$rpjmds,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('rpjmd.index');
    }

    public function edit($id)
    {
        $rpjmd=Rpjmd::findOrFail($id);

        return view('admin.pages.rpjmd.edit-rpjmd', ['rpjmd'=>$rpjmd]);
    }

    public function update(Request $request, $id)
    {
        $rpjmd=$request->validate([
            'title_rpjmd'=>'required',
            'year'=>'required',
            'file_rpjmd'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_rpjmd'))
        {
            $file=$request->file('file_rpjmd');
            $extension=$file->getClientOriginalName();
            $rpjmds=$extension;
            $file->move('uploads/file-rpjmd', $rpjmds);
        }

        $rpjmd=Rpjmd::findOrFail($id);

        $rpjmd->update([
            'title_rpjmd'=>$request->title_rpjmd,
            'slug'=>Str::slug($request->title_rpjmd),
            'year'=>$request->year,
            'file_rpjmd'=>$rpjmds,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('rpjmd.index');
    }

    public function destroy($id)
    {
        $rpjmd=Rpjmd::findOrFail($id);

        $rpjmd->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Rpjmd $rpjmd)
    {
        $filepath=public_path("uploads/file-rpjmd/{$rpjmd->file_rpjmd}");

        return response()->download($filepath);
    }
}

