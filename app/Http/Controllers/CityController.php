<?php

namespace App\Http\Controllers;

use App\Models\Apbd;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CityController extends Controller
{
    public function index()
    {
        $city=City::with('apbd')->where('apbd_id', $apbd->id)->get();

        return view('admin.pages.city.index-city', ['city'=>$city, 'apbd'=>$apbd]);
    }

    public function create()
    {
        $apbd=Apbd::all();

        return view('admin.pages.city.create-city');
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
            'slug'=>Str::slug($request->name_city),
            'file_apbd'=>$citys,
            'apbd_id'=>$apbd->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('city.index');
    }

    public function edit($id)
    {
        $apbd=Apbd::all();

        $city=City::findOrFail($id);

        return view('admin.pages.city.edit-city', ['city'=>$city, 'apbd'=>$apbd]);
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
            'file_apbd'=>$citys,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('city.index');
    }

    public function destroy($id)
    {
        $city=City::findOrFail($id);

        $city->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
