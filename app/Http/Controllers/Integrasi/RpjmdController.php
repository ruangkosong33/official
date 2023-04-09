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
            'year'=>'requried',
            'file_rpjmd'=>'required|mimes:2048|max:2048',
        ]);

        if($request->file('file_rpjmd'))
        {
            $file=$request->file('file_rpmjd');
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
            'year'=>'requried',
            'file_rpjmd'=>'required|mimes:2048|max:2048',
        ]);

        if($request->file('file_rpjmd'))
        {
            $file=$request->file('file_rpmjd');
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
}

