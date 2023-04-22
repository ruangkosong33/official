<?php

namespace App\Http\Controllers\Potention;

use App\Models\Asset;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AssetController extends Controller
{
    public function index()
    {
        $asset=Asset::all();

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
            $extension=$file->getClientOriginalName();
            $assets=$extension;
            $file->move('uploads/file-asset', $assets);
        }

        $asset=Asset::create([
            'title_asset'=>$request->title_asset,
            'slug'=>Str::slug($request->title_asset),
            'file_asset'=>$assets,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('asset.index');
    }

    public function edit($id)
    {
        $asset=Asset::findOrFail($id);

        return view('admin.pages.asset.edit-asset', ['asset'=>$asset]);
    }

    public function update(Request $request, $id)
    {
        $asset=$request->validate([
            'title_asset'=>'required',
            'file_asset'=>'requried|mimes:pdf|max:2048',
        ]);

        if($request->file('file_asset'))
        {
            $file=$request->file('file_asset');
            $extension=$file->getClientOriginalName();
            $assets=$extension;
            $file->move('uploads/file-asset', $assets);
        }

        $asset=Asset::findOrFail($id);

        $asset->update([
            'title_asset'=>$request->title_asset,
            'slug'=>Str::slug($request->title_asset),
            'file_asset'=>$assets,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('asset.index');
    }

    public function destroy($id)
    {
        $asset=Asset::findOrFail($id);

        $asset->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('asset.index');
    }
}
