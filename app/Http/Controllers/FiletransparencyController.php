<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Transparency;
use Illuminate\Http\Request;
use App\Models\Filetransparency;
use RealRashid\SweetAlert\Facades\Alert;

class FiletransparencyController extends Controller
{
    public function index(Transparency $transparency)
    {
        $filetransparency=Filetransparency::where('transparency_id', $transparency->id)->get();

        return view('admin.pages.filetransparency.index-filetransparency', ['transparency'=>$transparency, 'filetransparency'=>$filetransparency]);
    }

    public function create(Transparency $transparency)
    {
        return view('admin.pages.filetransparency.create-filetransparency', ['transparency'=>$transparency]);
    }

    public function store(Request $request, Transparency $transparency)
    {
        $filetranparency=$request->validate([
            'title_filetransparency'=>'required',
            'file_transparency'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:60000',
        ]);

        if($request->file('file_transparency'))
        {
            $file=$request->file('file_transparency');
            $extension=$file->getClientOriginalName();
            $filetransparencys=$extension;
            $file->move('uploads/file-transparansi', $filetransparencys);
        }

        $filetransparency=Filetransparency::create([
            'title_filetransparency'=>$request->title_filetransparency,
            'slug'=>Str::slug($request->title_filetransparency),
            'file_transparency'=>$filetransparencys,
            'transparency_id'=>$transparency->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filetransparency.index', ['transparency'=>$transparency]);
    }

    public function edit(Filetransparency $filetransparency)
    {
        return view('admin.pages.filetransparency.edit-filetransparency', ['filetransparency'=>$filetransparency]);
    }

    public function update(Request $request, Filetransparency $filetransparency)
    {
        $filetransparency=$request->validate([
            'title_filetransparency'=>'requried',
            'file_transparency'=>'mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:200000',
        ]);

        if($request->file('file_transparency'))
        {
            $file=$request->file('file_transparency');
            $extension=$file->getClientOriginalName();
            $filetransparencys=$extension;
            $file->move('uploads/file-tranparansi', $filetransparencys);
        }

        $filetransparency=Filetransparency::create([
            'title_filetransparency'=>$request->title_filetransparency,
            'slug'=>Str::slug($request->title_filetransparency),
            'file_transparency'=>$filetransparencys,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('filetransparency.index', ['transparency'=>$transparency]);
    }

    public function destroy(Filetransparency $filetransparency)
    {
        $filetransparency=Filetransparency::where('id', $filetransparency->id);

        $filetransparency->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Filetransparency $filetransparency)
    {
        $filepath=public_path("uploads/file-transparansi/{$filetransparency->file_transparency}");

        return response()->download($filepath);
    }
}
