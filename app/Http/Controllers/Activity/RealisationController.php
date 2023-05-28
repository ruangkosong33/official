<?php

namespace App\Http\Controllers\Activity;

use App\Models\Realisation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RealisationController extends Controller
{
    public function index()
    {
        $realisation=Realisation::all();

        return view('admin.pages.realisation.index-realisation', ['realisation'=>$realisation]);
    }

    public function create()
    {
        return view('admin.pages.realisation.create-realisation');
    }

    public function store(Request $request)
    {
        $realisation=$request->validate([
            'title_realisation'=>'required',
            'file_realisation'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_realisation'))
        {
            $file=$request->file('file_realisation');
            $extension=$file->getClientOriginalName();
            $realisations=$extension;
            $file->move('uploads/file-realisasi', $realisations);
        }

        $realisation=Realisation::create([
            'title_realisation'=>$request->title_realisation,
            'slug'=>Str::slug($request->title_realisation),
            'file_realisation'=>$realisations,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('realisation.index');

    }

    public function edit($id)
    {
        $realisation=Realisation::findOrFail($id);

        return view('admin.pages.realisation.edit-realisation', ['realisation'=>$realisation]);
    }

    public function update(Request $request, $id)
    {
        $realisation=$request->validate([
            'title_realisation'=>'required',
            'file_realisation'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_realisation'))
        {
            $file=$request->file('file_realisation');
            $extension=$file->getClientOriginalName();
            $realisations=$extension;
            $file->move('uploads/file-realisasi', $realisations);
        }

        $realisation=Realisation::findOrFail($id);

        $realisation->update([
            'title_realisation'=>$request->title_realisation,
            'slug'=>Str::slug($request->title_realisation),
            'file_realisation'=>$realisations,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('realisation.index');
    }

    public function destroy($id)
    {
        $realisation=Realisation::findOrFail($id);

        $realisation->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('realisation.index');
    }

    public function download(Realisation $realisation)
    {
        $filepath=public_path("uploads/file-realisasi/{$realisation->file_realisastion}");

        return response()->download($filepath);
    }
}
