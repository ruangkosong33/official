<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Sk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SkController extends Controller
{
    public function index()
    {
        $sk=Sk::latest()->get();

        return view('admin.pages.sk.index-sk', ['sk'=>$sk]);
    }

    public function create()
    {
        return view('admin.pages.sk.create-sk');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_sk'=>'required',
            'file_sk'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:60000',
        ]);

        if($request->file('file_sk'))
        {
            $file=$request->file('file_sk');
            $extension=$file->getClientOriginalName();
            $sks=$extension;
            $file->move('uploads/file-sk', $sks);
        }

        $sk=Sk::create([
            'title_sk'=>$request->title_sk,
            'slug'=>Str::slug($request->title_sk),
            'file_sk'=>$sks,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('sk.index');
    }

    public function edit(Sk $sk)
    {
        return view('admin.pages.sk.edit-sk', ['sk'=>$sk]);
    }

    public function update(Request $request, Sk $sk)
    {
        $this->validate($request, [
            'title_sk'=>'required',
            'file_sk'=>'mimes:pdf|max:60000'
        ]);

        if($request->file('file_sk'))
        {
            $file=$request->file('file_sk');
            $extension=$file->getClientOriginalName();
            $sks=$extension;
            $file->move('uploads/file-sk', $sks);
        }

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('sk.index');
    }

    public function destroy(Sk $sk)
    {
        $sk=Sk::where('id', $sk->id);

        $sk->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
