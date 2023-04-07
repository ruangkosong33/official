<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $city=City::with('apbd')->get();

        return view('admin.pages.city.index-city', ['city'=>$city, 'apbd'=>$apbd]);
    }

    public function create()
    {
        $apbd=Apbd::all();

        return view('admin.pages.city.create-city', ['city'=>$city]);
    }

    public function store(Request $request)
    {
        $city=$request->validate([
            'name_city'=>'required',
            'file_apbd'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_apbd'))
        {
            $file=$request->file('file_apbd');
            $extension=$file->getClientOriginalName();
            $citys=$extension;
            $file->move('uploads/file-apbd', $citys);
        }

        $city=City::create([
            'name_city'=>$request->name_city,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('city.index');
    }

    public function edit($id)
    {
        $apbd=Apbd::all();

        $city=City::findOrFail($id);

        return view('admin.pages.city.edit-city', ['apbd'=>$apbd]);
    }

    public function update(Request $request, $id)
    {
        $city=$request->validate([
            'name_city'=>'required',
            'file_apbd'=>'required|mimes:pdf|max:2048',
        ]);

        if($request->file('file_apbd'))
        {
            $file=$request->file('file_apbd');
            $extension=$file->getClientOriginalName();
            $citys=$extension;
            $file->move('uploads/file-apbd', $citys);
        }

        $city=City::findOrFail($id);

        $city->update([
            'name_city'=>$request->name_city,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('city.index');
    }
}
