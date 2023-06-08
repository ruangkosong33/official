<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Sop;
use App\Models\Filesop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class FilesopController extends Controller
{
    public function index(Sop $sop)
    {
        $filesop=Filesop::where('sop_id', $sop->id)->get();

        return view('admin.pages.filesop.index-filesop', ['sop'=>$sop, 'filesop'=>$filesop]);
    }

    public function create(Sop $sop)
    {
        return view('admin.pages.filesop.create-filesop', ['sop'=>$sop]);
    }

    public function store(Request $request, Sop $sop)
    {
        $filesop=$request->validate([
            'name_filesop'=>'required',
            'file_sop'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_sop'))
        {
            $file=$request->file('file_sop');
            $extension=$file->getClientOriginalName();
            $filesops=$extension;
            $file->move('uploads/file-sop', $filesops);
        }

        $filesop=Filesop::create([
            'name_filesop'=>$request->name_filesop,
            'slug'=>Str::slug($request->name_filesop),
            'file_sop'=>$filesops,
            'sop_id'=>$sop->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filesop.index', ['sop'=>$sop]);
    }

    public function edit(Filesop $filesop)
    {
        return view('admin.pages.filesop.edit-filesop', ['filesop'=>$filesop]);
    }

    public function update(Request $request, Filesop $filesop)
    {
        $filesop=$request->validate([
            'name_filesop'=>'required',
            'file_sop'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_sop'))
        {
            $file=$request->file('file_sop');
            $extension=$file->getClientOriginalName();
            $filesops=$extension;
            $file->move('uploads/file-sop', $filesops);

        }

        filesop::where('id', $filesop->id)->update([
            'name_filesop'=>$request->name_filesop,
            'slug'=>Str::slug($request->name_filesop),
            'file_sop'=>$filesops,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('sop.index', ['filesop'=>$filesop]);
    }

    public function destroy(Filesop $filesop)
    {
        $filesop=Filesop::where('id', $filesop->id);

        $filesop->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Filesop $filesop)
    {
        $filepath=public_path("uploads/file-sop/{$filesop->file_sop}");

        return response()->download($filepath);

    }

}

