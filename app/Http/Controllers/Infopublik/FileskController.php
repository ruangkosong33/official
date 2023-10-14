<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Sk;
use App\Models\Filesk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FileskController extends Controller
{
    public function index(Sk $sk)
    {
        $filesk=Filesk::where('sk_id', $sk->id)->latest()->get();

        return view('admin.pages.filesk.index-filesk', ['filesk'=>$filesk, 'sk'=>$sk]);
    }

    public function create(Sk $sk)
    {
        return view('admin.pages.filesk.create-filesk', ['sk'=>$sk]);
    }

    public function store(Request $request, Sk $sk)
    {
        $this->validate($request, [
            'title_filesk'=>'required',
            'file_sk'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:60000',
        ]);

        if($request->file('file_sk'))
        {
            $file=$request->file('file_sk');
            $extension=$file->getClientOriginalName();
            $filesks=$extension;
            $file->move('uploads/file-sk', $filesks);
        }

        $filesk=Filesk::create([
            'sk_id'=>$sk->id,
            'title_filesk'=>$request->title_filesk,
            'slug'=>Str::slug($request->title_filesk),
            'file_sk'=>$filesks,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filesk.index', ['sk'=>$sk]);
    }

    public function edit(Filesk $filesk)
    {
        return view('admin.pages.filesk.edit-filesk', ['filesk'=>$filesk]);
    }

    public function update(Request $request, Filesk $filesk)
    {
        $this->validate($request, [
            'title_filesk'=>'required',
            'file_sk'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:60000',
        ]);

        if($request->file('file_sk'))
        {
            $file=$request->file('file_sk');
            $extension=$file->getClientOriginalName();
            $filsks=$extension;
            $file->move('uploads/file-sk', $filesks);
        }

        $filesks=$filesk->file_sk;

        $filesk->update([
            'title_filesk'=>$request->title_filesk,
            'slug'=>Str::slug($request->title_filesk),
            'file_sk'=>$filesks,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('filesk.index');
    }

    public function destroy(Filesk $filesk)
    {
        $filesk=Filesk::where('id', $filesk->id);

        $filesk->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

}
