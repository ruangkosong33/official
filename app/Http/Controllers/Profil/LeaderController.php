<?php

namespace App\Http\Controllers\Profil;

use App\Models\Leader;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'nip_leader'=>'required',
            'image_leader'=>'mimes:jpeg,jpg,png',
            'periode'=>'required',
        ]);

        $leader=Leader::create([
            'name_leader'=>$request->name_leader,
            'slug'=>Str::slug($request->name_leader),
            'nip_leader'=>$request->nip_leader,
            'image_leader'=>$imageleader,
            'periode'=>$request->periode,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('leader,index');
    }

    public function edit($id)
    {
        $leader=Leader::findOrFail($id);

        return view('admin.pages.leader.edit-leader', ['leader'=>$leader]);
    }

    public function destroy($id)
    {

    }
}
