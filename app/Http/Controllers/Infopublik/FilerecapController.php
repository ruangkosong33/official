<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Recap;
use App\Models\Citykab;
use App\Models\Filerecap;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FilerecapController extends Controller
{
    public function index(Recap $recap)
    {
        $filerecap=Filerecap::where('recap_id', $recap->id)->latest()->get();

        return view('admin.pages.filerecap.index-filerecap', ['filerecap'=>$filerecap, 'recap'=>$recap]);
    }

    public function create(Recap $recap)
    {
        $citykab=Citykab::all();

        return view('admin.pages.filerecap.create-filerecap', ['citykab'=>$citykab, 'recap'=>$recap]);
    }

    public function store(Request $request, Recap $recap)
    {
        $filerecap=$request->validate([
            'title_filerecap'=>'required',
            'file_recap'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_recap'))
        {
            $file=$request->file('file_recap');
            $extension=$file->getClientOriginalName();
            $filerecaps=$extension;
            $file->move('uploads/file-recap', $filerecaps);
        }

        $filerecap=Filerecap::create([
            'citykab_id'=>$request->citykab_id,
            'recap_id'=>$recap->id,
            'title_filerecap'=>$request->title_filerecap,
            'slug'=>Str::slug($request->title_filerecap),
            'file_recap'=>$filerecaps,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filerecap.index', ['recap'=>$recap]);
    }

    public function edit(Filerecap $filerecap)
    {
        $citykab=Citykab::all();

        return view('admin.pages.filerecap.edit-filerecap', ['filerecap'=>$filerecap, 'citykab'=>$citykab]);
    }

    public function update(Request $request, Filerecap $filerecap)
    {
        $this->validate($request, [
            'title_filerecap'=>'required',
            'file_recap'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_recap'))
        {
            $file=$request->file('file_recap');
            $extension=$file->getClientOriginalName();
            $filerecaps=$extension;
            $file->move('uploads/file-recap', $filerecaps);
        }

        $filerecaps=$filerecap->file_recap;

        $filerecap->update([
            'citykab_id'=>$request->citykab_id,
            'title_filerecap'=>$request->title_filerecap,
            'slug'=>Str::slug($request->title_filerecap),
            'file_recap'=>$filerecaps,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('recap.index');
    }

    public function destroy(Filerecap $filerecap)
    {
        $filerecap=Filerecap::where('id', $filerecap->id);

        $filerecap->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
