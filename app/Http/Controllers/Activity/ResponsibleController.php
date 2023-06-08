<?php

namespace App\Http\Controllers\Activity;

use App\Models\Responsible;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ResponsibleController extends Controller
{
    public function index()
    {
        $responsible=Responsible::all();

        return view('admin.pages.responsible.index-responsible', ['responsible'=>$responsible]);
    }

    public function create()
    {
        return view('admin.pages.responsible.create-responsible');
    }

    public function store(Request $request)
    {
        $responsible=$request->validate([
            'title_responsible'=>'required',
            'file_responsible'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_responsible'))
        {
            $file=$request->file('file_responsible');
            $extension=$file->getClientOriginalName();
            $responsibles=$extension;
            $file->move('uploads/file-Program-Kegiatan', $responsibles);
        }

        $responsible=Responsible::create([
            'title_responsible'=>$request->title_responsible,
            'slug'=>Str::slug($request->title_responsible),
            'file_responsible'=>$responsibles,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('responsible.index');
    }

    public function edit(Responsible $responsible)
    {
        return view('admin.pages.responsible.edit-responsible', ['responsible'=>$responsible]);
    }

    public function update(Request $request, Responsible $responsible)
    {
        $responsible=$request->validate([
            'title_responsible'=>'required',
            'file_responsible'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_responsible'))
        {
            $file=$request->file('file_responsible');
            $extension=$file->getClientOriginalName();
            $responsibles=$extension;
            $file->move('uploads/file-Program-Kegiatan', $responsibles);
        }

        $responsible->update([
            'title_responsible'=>$request->title_responsible,
            'slug'=>Str::slug($request->title_responsible),
            'file_responsible'=>$responsibles,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('responsible.index');
    }

    public function destroy(Responsible $responsible)
    {
        $responsible=Responsible::where('id', $responsible->id);

        $responsible->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
    }

    public function download(Responsible $responsible)
    {
        $filepath=public_path("/uploads/file-program-kegiatan/{$responsible->file_responsible}");

        return response()->download($filepath);
    }
}

