<?php

namespace App\Http\Controllers\Profil;

use App\Models\Leader;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LeaderController extends Controller
{
    public function index()
    {
        $leader=Leader::all();

        return view('admin.pages.leader.index-leader', ['leader'=>$leader]);
    }

    public function create()
    {
        return view('admin.pages.leader.create-leader');
    }

    public function store(Request $request)
    {
        $leader=$request->validate([
            'name_leader'=>'required',
            'image_leader'=>'mimes:jpeg,jpg,png',
            'periode'=>'required',
        ]);

        if($request->file('image_leader'))
        {
            $file=$request->file('image_leader');
            $extension=$file->getClientOriginalName();
            $imageleaders=$extension;
            $file->move('uploads/foto-pimpinan', $imageleaders);
        }

        $leader=Leader::create([
            'name_leader'=>$request->name_leader,
            'slug'=>Str::slug($request->name_leader),
            'image_leader'=>$imageleaders,
            'periode'=>$request->periode,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('leader.index');
    }

    public function edit($id)
    {
        $leader=Leader::findOrFail($id);

        return view('admin.pages.leader.edit-leader', ['leader'=>$leader]);
    }

    public function update(Request $request, $id)
    {
        $leader=$request->validate([
            'name_leader'=>'required',
            'image_leader'=>'mimes:jpeg,jpg,png',
            'periode'=>'required',
        ]);

        if($request->file('image_leader'))
        {
            $file=$request->file('image_leader');
            $extension=$file->getClientOriginalName();
            $imageleaders=$extension;
            $file->move('uploads/foto-pimpinan', $imageleaders);
        }

        $leader=Leader::findOrFail($id);

        $leader->update([
            'name_leader'=>$request->name_leader,
            'slug'=>Str::slug($request->name_leader),
            'image_leader'=>$imageleaders,
            'periode'=>$request->periode,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('leader.index');
    }

    public function destroy($id)
    {
        $leader=Leader::findOrFail($id);

        $leader->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
