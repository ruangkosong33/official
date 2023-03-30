<?php

namespace App\Http\Controllers;

use App\Models\Law;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LawController extends Controller
{
    public function index()
    {
        $law=Law::latest()->get();

        return view('admin.pages.law.index-law', ['law'=>$law]);
    }

    public function create()
    {
        return view('admin.pages.law.create-law');
    }

    public function store(Request $request)
    {
        $law=$request->validate([
            'title_law'=>'required',
        ]);

        $law=Law::create([
            'title_law'=>$request->title_law,
            'slug'=>Str::slug($request->title_law),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('law.index');
    }

    public function edit(Law $law)
    {
        return view('admin.pages.law.edit-law', ['law'=>$law]);
    }

    public function update(Request $request, Law $law)
    {
        $this->validate($request, [
            'title_law'=>'required',
        ]);

        $law=Law::where('id', $law->id)->update([

            'title_law'=>$request->title_law,
            'slug'=>Str::slug($request->title_law),
        ]);

        Alert::success('Berhasil', 'Berhasil Data Di Update');

        return redirect()->route('law.index');
    }

    public function destroy(Law $law)
    {
        $law=Law::where('id', $law->id);

        $law->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('law.index');
    }
}
