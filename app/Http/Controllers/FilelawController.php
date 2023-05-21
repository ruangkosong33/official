<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Models\Filelaw;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FilelawController extends Controller
{
    public function index(Law $law)
    {
        $filelaw=filelaw::where('law_id',$law->id)->get();

        return view('admin.pages.filelaw.index-filelaw', ['law'=>$law, 'filelaw'=>$filelaw]);
    }

    public function create(Law $law)
    {
        return view('admin.pages.filelaw.create-filelaw', ['law'=>$law]);
    }

    public function store(Request $request, Law $law)
    {
        $filelaw=$request->validate([
            'title_filelaw'=>'required',
            'file_filelaw'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_filelaw'))
        {
            $file=$request->file('file_filelaw');
            $extension=$file->getClientOriginalName();
            $filename=$extension;
            $file->move('uploads/Produk-Hukum', $filename);
        }

        $filelaw=Filelaw::create([
            'title_filelaw'=>$request->title_filelaw,
            'slug'=>Str::slug($request->title_filelaw),
            'file_filelaw'=>$filename,
            'law_id'=>$law->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filelaw.index', ['law'=>$law]);
    }

    public function edit(Filelaw $filelaw)
    {
        return view('admin.pages.filelaw.edit-filelaw', ['filelaw'=>$filelaw]);
    }

    public function update(Request $request, Filelaw $filelaw)
    {
        $this->validate($request,[
            'title_filelaw'=>$request->title_filelaw,
            'filelaw'=>$filename,
        ]);

        $filelaw=Filelaw::where('id', $filelaw->id)->update([
            'title_filelaw'=>$request->title_filelaw,
            'slug'=>Str::slug($request->title_filelaw),
            'file_law'=>$filename,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('law.index', ['filelaw'=>$filelaw]);

    }

    public function destroy(Filelaw $filelaw)
    {
        $filelaw=Filelaw::where('id', $filelaw->id);

        $filelaw->delete();

        return redirect()->back();
    }

    public function download(Filelaw $filelaw)
    {
        $filepath=public_path("uploads/file-law/{$filelaw->file_law}");

        return response()->download($filepath);
    }
}
