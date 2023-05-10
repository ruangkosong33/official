<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Policydirection;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PolicydirectionController extends Controller
{
    public function index()
    {
        $policydirection=Policydirection::all();

        return view('admin.pages.policydirection.index-policydirection', ['policydirection'=>$policydirection]);
    }

    public function create()
    {
        return view('admin.pages.policydirection.create-policydirection');
    }

    public function store(Request $request)
    {
        $policydirection=$request->validate([
            'title_policydirection'=>'required',
            'description_policydirection'=>'required',
        ]);

        $policydirection=Policydirection::create([
            'title_policydirection'=>$request->title_policydirection,
            'slug'=>Str::slug($request->policydirection),
            'description_policydirection'=>$request->description_policydirection,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('policydirection.index');
    }

    public function edit($id)
    {
        $policydirection=Policydirection::findOrFail($id);

        return view('admin.pages.policydirection.edit-policydirection', ['policydirection'=>$policydirection]);
    }

    public function update(Request $request, $id)
    {
        $policydirection=$request->validate([
            'title_policydirection'=>'required',
            'description_policydirection'=>'required',
        ]);

        $policydirection=Policydirection::findOrFail($id);

        $policydirection->update([
            'title_policydirection'=>$request->title_policydirection,
            'slug'=>Str::slug($request->title_policydirection),
            'description_policydirection'=>$request->description_policydirection,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('policydirection.index');
    }

    public function destroy($id)
    {
        $policydirection=Policydirection::findOrFail($id);

        $policydirection->delete();

        return redirect()->route('policydirection.index');
    }
}
