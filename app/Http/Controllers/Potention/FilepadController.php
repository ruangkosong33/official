<?php

namespace App\Http\Controllers\Potention;

use App\Models\Pad;
use App\Models\Filepad;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FilepadController extends Controller
{
    public function index(Pad $pad)
    {
        $filepad=Filepad::where('pad_id',$pad->id)->get();

        return view('admin.pages.filepad.index-filepad', ['filepad'=>$filepad, 'pad'=>$pad]);
    }

    public function create(Pad $pad)
    {
        return view('admin.pages.filepad.create-filepad', ['pad'=>$pad]);
    }

    public function store(Request $request, Pad $pad)
    {
        $filepad=$request->validate([
            'title_filepad'=>'required',
            'file_filepad'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_filepad'))
        {
            $file=$request->file('file_filepad');
            $extension=$file->getClientOriginalName();
            $filepads=$extension;
            $file->move('uploads/file-pad', $filepads);
        }

        $filepad=Filepad::create([
            'title_filepad'=>$request->title_filepad,
            'slug'=>Str::slug($request->title_filepad),
            'file_filepad'=>$filepads,
            'pad_id'=>$pad->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filepad.index', ['pad'=>$pad]);
    }

    public function edit(Pad $pad, Filepad $filepad)
    {
        return view('admin.pages.filepad.edit-filepad', ['pad'=>$pad, 'filepad'=>$filepad]);
    }

    public function update(Request $request,Filepad $filepad)
    {

        $this->validate($request,[
            'title_filepad'=>'required',
            'file_filepad'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_filepad'))
        {
            $file=$request->file('file_filepad');
            $extension=$file->getClientOriginalName();
            $filepads=$extension;
            $file->move('uploads/File-PAD/', $filepads);
        }

        $filepad=Filepad::where('id', $filepad->id)->update([
            'title_filepad'=>$request->title_filepad,
            'slug'=>Str::slug($request->title_filepad),
            'file_filepad'=>$filepads,
        ]);

        return redirect()->route('pad.index', ['filepad'=>$filepad]);

    }

    public function destroy(filepad $filepad)
    {
        $filepad=filepad::where('id', $filepad->id);

        $filepad->delete();

        return back();
    }

    public function download(Filepad $filepad)
    {
        $filepath=public_path("uploads/file-pad/{$filepad->file_pad}");

        return response()->download($filepath);
    }
}
