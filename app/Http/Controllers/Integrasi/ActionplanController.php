<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Actionplan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ActionplanController extends Controller
{
    public function index()
    {
        $actionplan=Actionplan::all();

        return view('admin.pages.actionplan.index-actionplan', ['actionplan'=>$actionplan]);
    }

    public function create()
    {
        return view('admin.pages.actionplan.create-actionplan');
    }

    public function store(Request $request)
    {
        $actionplan=$request->validate([
            'title_actionplan'=>'required',
            'file_actionplan'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_actionplan'))
        {
            $file=$request->file('file_actionplan');
            $extension=$file->getClientOriginalName();
            $actionplans=$extension;
            $file->move('upload/file-rencana-aksi', $actionplans);
        }

        $actionplan=Actionplan::create([
            'title_actionplan'=>$request->title_actionplan,
            'slug'=>Str::slug($request->title_actionplan),
            'file_actionplan'=>$actionplans,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('actionplan.index');
    }

    public function edit($id)
    {
        $actionplan=Actionplan::findOrFail($id);

        return view('admin.pages.edit-actionplan', ['actionplan'=>$actionplan]);
    }

    public function update(Request $request, $id)
    {
        $actionplan=$request->validate([
            'title_actionplan'=>'required',
            'file_actionplan'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_actionplan'))
        {
            $file=$request->file('file_actionplan');
            $extension=$file->getClientOriginalName();
            $actionplans=$extension;
            $file->move('upload/file-rencana-aksi', $actionplans);
        }

        $actionplan=Actionplan::findOrFail($id);

        $actionplan->update([
            'title_actionplan'=>$request->title_actionplan,
            'slug'=>Str::slug($request->title_actionplan),
            'file_actionplan'=>$actionplans,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('actionplan.index');
    }

    public function destroy($id)
    {
        $actionplan=Actionplan::findOrFail($id);

        $actionplan->delete();

        Alert::success('Berhasil' ,'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
