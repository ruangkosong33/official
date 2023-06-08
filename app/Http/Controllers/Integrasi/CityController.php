<?php

namespace App\Http\Controllers\Integrasi;

use App\Models\Apbd;
use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(Apbd $apbd)
    {
        $city=City::where('apbd_id',$apbd->id)->get();

        return view('admin.pages.city.index-city', ['city'=>$city, 'apbd'=>$apbd]);
    }

    public function create(Apbd $apbd)
    {
        return view('admin.pages.city.create-city', ['apbd'=>$apbd]);
    }

    public function store(Request $request, Apbd $apbd)
    {
        $city=$request->validate([
            'name_city'=>'required',
            'file_apbd'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
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

        return redirect()->route('city.index', ['apbd'=>$apbd]);
    }

    public function edit(City $city)
    {

        return view('admin.pages.city.edit-city', ['city'=>$city]);
    }

    public function update(Request $request, City $city)
    {
        $city=$request->validate([
            'name_city'=>'required',
            'file_apbd'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        if($request->file('file_apbd'))
        {
            $file=$request->file('file_apbd');
            $extension=$file->getClientOriginalName();
            $citys=$extension;
            $file->move('uploads/file-apbd', $citys);
        }

        $city->update([
            'name_city'=>$request->name_city,
            'file_apbd'=>$citys,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('city.index');
    }

    public function destroy(City $city)
    {
        $city=City::where('id', $city->id);

        $city->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
