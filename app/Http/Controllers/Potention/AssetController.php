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
            'file_asset'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
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
            'file_asset'=>'requried|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:40000',
        ]);

        $imageName = '';
        if ($request->hasFile('file')) {
        $imageName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/images', $imageName);
        if ($post->image) {
            Storage::delete('public/images/' . $post->image);
        }
        } else {
        $imageName = $post->image;
        }

        if($request->file('file_asset'))
        {
            $destination = 'uploads/file-asset/'.$asset->file_asset;

            if(File::exists($destination))
            {
                File::delete($destination);
            }

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

        $destination = 'uploads/file-asset/'.$asset->file_asset;

        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $asset->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('asset.index');
    }

    public function download(Asset $asset)
    {
        $filepath=public_path("uploads/file-asset/{$asset->file_asset}");

        return response()->download($filepath);
    }
}
