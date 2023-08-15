<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Bba;
use App\Models\Citykab;
use App\Models\Filebba;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FilebbaController extends Controller
{
    public function index(Bba $bba)
    {
        $filebba=Filebba::where('bba_id', $bba->id)->get();

        return view('admin.pages.filebba.index-filebba', ['filebba'=>$filebba, 'bba'=>$bba]);
    }

    public function create(Bba $bba)
    {
        $citykab=Citykab::all();

        return view('admin.pages.filebba.create-filebba', ['bba'=>$bba, 'citykab'=>$citykab]);
    }

    public function store(Request $request, Bba $bba)
    {
        $filebba=$request->validate([
            'title_filebba'=>'required',
            'file_bba'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
            'date'=>'required',
            'description'=>'required',
            'total'=>'required',
        ]);

        if($request->file('file_bba'))
        {
            $file=$request->file('file_bba');
            $extension=$file->getClientOriginalName();
            $filebbas=$extension;
            $file->move('/uploads/file-bba', $filebbas);
        }

        $filebba=Filebba::create([
            'bba_id'=>$bba->id,
            'citykab_id'=>$request->citykab_id,
            'title_filebba'=>$request->title_filebba,
            'slug'=>Str::slug($request->title_filebba),
            'file_bba'=>$filebbas,
            'date'=>$request->date,
            'description'=>$request->description,
            'total'=>$request->total,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filebba.index', ['bba'=>$bba]);
    }

    public function edit(Filebba $filebba, Bba $bba)
    {
        $citykab=Citykab::all();

        return view('admin.pages.filebbh.edit-filebbh', ['filebbh'=>$filebbh, 'bbh'=>$Bbh, 'citykab'=>$citykab]);
    }

    public function update(Request $request, Bbh $bbh)
    {
        $this->validate($request,[
            'title_filebba'=>'required',
            'file_bbh'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
            'date'=>'required',
            'description'=>'required',
            'total'=>'required',
        ]);

        if($request->file('file_bba'))
        {
            $file=$request->file('file_bba');
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

    public function download(Bba $bba)
    {
        $filepath=public_path("uploads/file-bba/{$filebba->file_bba}");

        return response()->download($filepath);
    }
}
