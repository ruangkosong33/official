<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Hostel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class HostelController extends Controller
{
    public function index()
    {
        $hostel=Hostel::latest()->get();

        return view('admin.pages.hostel.index-hostel', ['hostel'=>$hostel]);
    }

    public function create()
    {
        return view('admin.pages.hostel.create-hostel');
    }

    public function store(Request $request)
    {
        $hostel=$request->validate([
            'name_hostel'=>'required',
            'address_hostel'=>'required'
        ]);

        $hostel=Hostel::create([
            'name_hostel'=>$request->name_hostel,
            'slug'=>Str::slug($request->name_hostel),
            'address_hostel'=>$request->address_hostel,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');
        return redirect()->route('hostel.index');
    }

    public function edit(Hostel $hostel)
    {
        return view('admin.pages.hostel.edit-hostel', ['hostel'=>$hostel]);
    }

    public function update(Request $request, Hostel $hostel)
    {
        $hostel=$request->validate([
            'title_hostel'=>'required',
            'address_hostel'=>'required',
        ]);

        $hostel=Hostel::findOrFail($hostel);
        
        $hostel->update([
            'title_auction'=>$request->name_hostel,
            'slug'=>Str::slug($request->address_hostel)
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('hostel.index');
    }

    public function destroy(Hostel $hostel)
    {
        $hostel=Auction::where('id', $hostel->id);

        $hostel->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('hostel.index');

    }
}
