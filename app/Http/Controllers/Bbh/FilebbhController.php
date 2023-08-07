<?php

namespace App\Http\Controllers\Bbh;

use App\Models\Bbh;
use App\Models\Citykab;
use App\Models\Filebbh;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FilebbhController extends Controller
{
    public function index(Bbh $bbh)
    {
        $filebbh=Filebbh::where('bbh_id', $bbh->id)->get();

        return view('admin.pages.filebbh.index-filebbh', ['filebbh'=>$filebbh, 'bbh'=>$bbh]);
    }

    public function create(Bbh $bbh)
    {
        $citykab=Citykab::all();
        
        return view('admin.pages.filebbh.create-filebbh', ['bbh'=>$bbh, 'citykab'=>$citykab]);
    }

    public function store(Request $request, Bbh $bbh)
    {
        $filebbh=$request->validate([
            'title_filebbh'=>'required',
            'file_bbh'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
            'date'=>'required',
            'description'=>'required',
            'total'=>'required',
        ]);

        if($request->file('file_bbh'))
        {
            $file=$request->file('file_bbh');
            $extension=$file->getClientOriginalName();
            $filebbhs=$extension;
            $file->move('/uploads/file-bbh', $filebbhs);
        }

        $filebbh=Filebbh::create([
            'bbh_id'=>$bbh->id,
            'citykab_id'=>$request->citykab_id,
            'title_filebbh'=>$request->title_filebbh,
            'slug'=>Str::slug($request->title_filebbh),  
            'file_bbh'=>$filebbhs,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filebbh.index', ['bbh'=>$bbh]);
    }

    public function edit(Filebbh $filebbh, Bbh $bbh)
    {
        $citykab=Citykab::all();

        return view('admin.pages.filebbh.edit-filebbh', ['filebbh'=>$filebbh, 'bbh'=>$Bbh, 'citykab'=>$citykab]);
    }

    public function update(Request $request, Bbh $bbh)
    {
        $this->validate($request,[
            'title_filebbh'=>'required',
            'file_bbh'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
            'date'=>'required',
            'description'=>'required',
            'total'=>'required',
        ]);

        if($request->file('file_bbh'))
        {
            $file=$request->file('file_bbh');
            $extension=$file->getClientOriginalName();
            $filebbhs=$extension;
            $file->move('/uploads/file-bbh', $filebbhs);
        }

        $filebbh->update([
            'citykab_id'=>$request->citykab_id,
            'title_filebbh'=>$request->title_filebbh,
            'slug'=>Str::slug($request->title_filebbh),
            'file_bbh'=>$filebbhs,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('filebbh.index', ['bbh'=>$bbh]);
    }

    public function destroy(Filebbh $filebbh)
    {
        $filebbh=Filebbh::where('id', $filebbh->id);
        
        $filebbh->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download()
    {
        $filepath=public_path("uploads/file-bbh/{$filebbh->file_bbh}");

        return response()->download($filepath);
    }
    
}
