<?php

namespace App\Http\Controllers\Infopublik;

use App\Models\Download;
use Illuminate\Support\Str;
use App\Models\Filedownload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FiledownloadController extends Controller
{

    public function index(Download $download)
    {
        $filedownload=Filedownload::where('download_id', $download->id)->get();

        return view('admin.pages.filedownload.index-filedownload', ['download'=>$download, 'filedownload'=>$filedownload]);
    }

    public function create(Download $download)
    {
        return view('admin.pages.filedownload.create-filedownload', ['download'=>$download]);
    }

    public function store(Request $request, Download $download)
    {
        $filedownload=$request->validate([
            'title_filedownload'=>'required',
            'file_download'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:60000',
        ]);

        if($request->file('file_download'))
        {
            $file=$request->file('file_download');
            $extension=$file->getClientOriginalName();
            $filedownloads=$extension;
            $file->move('uploads/file-download', $filedownloads);
        }

        $filedownload=Filedownload::create([
            'title_filedownload'=>$request->title_filedownload,
            'slug'=>Str::slug($request->title_filedownload),
            'file_download'=>$filedownloads,
            'download_id'=>$download->id,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('filedownload.index', ['download'=>$download]);
    }

    public function edit(Filedownload $filedownload)
    {
        return view('admin.pages.file-download-edit-filedownload', ['filedownload'=>$filedownload]);
    }

    public function update(Request $request, Filedownload $filedownload)
    {
        $filedownload=$request->validate([
            'title_filedownload'=>'required',
            'file_download'=>'required|mimes:pdf,ppt,pptx,rar,zip,doc,docx,xls,xlsx|max:60000',
        ]);

        if($request->file('file_download'))
        {
            $file=$request->file('file_download');
            $extension=$file->getClientOriginalName();
            $filedownloads=$extension;
            $file->move('uploads/file-download', $filedownloads);
        }

        $filedownload->where('id', $filedownload->id)->update([
            'title_filedownload'=>$request->title_filedownload,
            'slug'=>Str::slug($request->title_filedowwnload),
            'file_download'=>$filedownloads,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('filedownload.index', ['download'=>$download]);
    }

    public function destroy(Filedownload $filedownload)
    {
        $filedownload=Filedownload::where('id',$filedownload->id);

        $filedownload->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }

    public function download(Filedownload $filedownload)
    {
        $filepath=public_path("uploads/file-download/{$filedownload->file_download}");

        return response()->download($filepath);
    }

}


