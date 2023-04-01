<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssetController extends Controller
{
    public function index()
    {
        $asset=Asset::latest()->get();

        return view('admin.pages.asset.index-asset', ['asset'=>$asset]);
    }

    public function create()
    {
        return view('admin.pages.asset.create-asset');
    }

    public function store(Request $request)
    {
        $asset=$request->validate([
            'title_asset'=>'required',
            'file_asset'=>'required|mimes:pdf|max:3000',
        ]);

        if($request->file('file_asset'))
        {
            $file=$request->file('file_asset');
            
        }

        $asset=Asset::create([
            'title_asset'=>$request->title_asset,
            'slug'=>Str::slug($request->title_asset),
            'file_asset'=>$fileaset,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('asset.index');
    }

    public function edit(Asset $asset)
    {
        return view('admin.pages.asset.edit-asset', ['asset'=>$asset]);
    }

    public function update(Request $request, Asset $asset)
    {
        $asset=$request->validate([
            'title_asset'=>'required',
            'file_asset'=>'required|mimes:pdf|max:3000',
        ]);

        $asset=Asset::where('id', $asset->id)->update([
            'title_asset'=>$request->title_asset,
            'slug'=>Str::slug($request->title_asset),
            'file_asset'=>$fileasset,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('admin.pages.asset.index-asset', ['asset'=>$asset]);
    }
}
