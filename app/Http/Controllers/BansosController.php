<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $bansos=Bansos::all();

        return view('admin.pages.bansos.index-bansos');
    }

    public function create()
    {
        return view('admin.pages.bansos.create-bansos');
    }

    public function store(Request $request)
    {
        $bansos=$request->validate([
            'title_bansos'=>'required',
            'file_bansos'=>'required|mimes:doc,docx,pdf,xls|max:3000',
        ]);

        $bansos=Bansos::create([

        ]);

        Alert::success('Berhasil', 'Data Telah Di Simpan');
        return redirect()->route('bansos.index');
    }

    public function edit($id)
    {
        $bansos=Bansos::findOrFail($id);

        return view('admin.pages.bansos.edit-bansos', ['bansos'=>$bansos]);
    }

    public function update(Request $request, $id)
    {
        $bansos=$request->validate([

        ]);
    }
}
