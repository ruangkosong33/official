<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Apbd;
use App\Models\Citykab;
use App\Models\Fileapbd;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FileapbdController extends Controller
{
    public function index(Apbd $apbd)
    {
        $fileapbd=Fileapbd::where('apbd_id', $apbd->id)->get();

        return view('admin.pages.fileapbd.index-fileapbd', ['fileapbd'=>$fileapbd, 'apbd'=>$apbd]);
    }

    public function create(Apbd $apbd)
    {
        $citykab=Citykab::all();
        return view('admin.pages.fileapbd.create-fileapbd', ['apbd'=>$apbd, 'citykab'=>$citykab]);
    }

    public function store(Request $request, Apbd $apbd)
    {
        $fileapbd=$request->validate([
            'title_fileapbd'=>'required',
            'file_apbd'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_apbd'))
        {
            $file=$request->file('file_apbd');
            $extension=$file->getClientOriginalName();
            $fileapbds=$extension;
            $file->move('uploads/file-apbd', $fileapbds);
        }

        $fileapbd=Fileapbd::create([
            'citykab_id'=>$request->citykab_id,
            'apbd_id'=>$apbd->id,
            'title_fileapbd'=>$request->title_fileapbd,
            'slug'=>Str::slug($request->title_fileapbd),
            'file_apbd'=>$fileapbds,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('fileapbd.index', ['apbd'=>$apbd]);
    }

    public function edit(Fileapbd $fileapbd)
    {
        $citykab=Citykab::all();

        return view('admin.pages.fileapbd.edit-fileapbd', ['fileapbd'=>$fileapbd, 'citykab'=>$citykab]);
    }

    public function update(Request $request, Fileapbd $fileapbd)
    {
        $this->validate($request, [
            'title_fileapbd'=>'required',
            'file_apbd'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_apbd'))
        {
            $file=$request->file('file_apbd');
            $extension=$file->getClientOriginalName();
            $fileapbds=$extension;
            $file->move('uploads/file-apbd', $fileapbds);
        }

        $fileapbd->update([
            'citykab_id'=>$request->citykab_id,
            'title_fileapbd'=>$request->title_fileapbd,
            'slug'=>Str::slug($request->title_fileapbd),
            'file_apbd'=>$fileapbds,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('fileapbd.index', ['fileapbd'=>$fileapbd]);
    }

    public function destroy(Fileapbd $fileapbd)
    {
        $fileapbd=Fileapbd::where('id', $fileapbd->id);

        $fileapbd->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Fileapbd $fileapbd)
    {
        $filepath=public_path("uploads/file-apbd/{$fileapbd->file_apbd}");

        return response()->download($filepath);
    }
}
