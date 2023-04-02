<?php

namespace App\Http\Controllers;

use App\Models\Filesop;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FilesopController extends Controller
{
    public function index(Sop $sop)
    {
        $filesop=Filesop::where('sop_id', $sop->id)->get();

        return view('admin.pages.filesop.index-filesop', ['filesop'=>$filesop]);
    }

    public function create(Sop $sop)
    {
        return view('admin.pages.filesop.create-filesop', ['pad'=>$pad]);
    }

    public function store(Request $request, Sop $sop)
    {
        $filesop=$request->validate([
            'name_filesop'=>'required',
            'file_sop'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_sop'))
        {
            $file=$request->file('file_sop');
            $extension=$file->getClientOriginalName();
            $filesops=$extension;
            $file->move('uplaods/file-sop', $filesops);
        }

        $filesop=Filesop::create([
            'name_sop'=>$request->name_filesop,
            'slug'=>Str::slug($request->name_filesop),
            'file_sop'=>$filesops,
            'pad_id'=>$pad->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filesop.index', ['pad'=>$pad]);
    }

    public function edit(Filesop $filesop)
    {
        return view('admin.pages.filesop.edit-filesop', ['filesop'=>$filesop]);
    }

    public function update(Request $request, Filesop $filesop)
    {
        $filesop=$request->validate([
            'name_filesop'=>'required',
            'file_sop'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_sop'))
        {
            $file=$request->file('file_sop');
            $extension=$file->getClientOriginalName();
            $filesops=$extension;
            $file->move('uploads/file-sop', $filesops);

        }

        filesop::where('id', $filesop->id)->update([
            'title_filesop'=>$request->name_filesop,
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

}
