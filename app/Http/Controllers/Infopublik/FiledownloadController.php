<?php

namespace App\Http\Controllers\Infopublik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiledownloadController extends Controller
{

    public function index()
    {
        $filedownload=Filedownload::all();

        return view('admin.pages.filedownload.index-filedownload', ['filedownload'=>$filedownload]);
    }

    public function create()
    {
        return view('admin.pages.filedownload.create-filedownload');
    }

    public function store(Request $request)
    {
        $filedownload=$request->validate([
            'file_download'=>'required|mimes:pdf|max:2048',
        ]);
    }

}


