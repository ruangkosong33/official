<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filesp2d;

class BbhController extends Controller
{
    public function index()
    {
        $filesp2ds = Filesp2d::latest()->get();
        return view('landing.pages.bbh.index-bbh',['filesp2ds'=>$filesp2ds]);
    }

    public function downloadFile($slug)
    {
        $filesp2d = Filesp2d::where('slug',$slug)->first();
        $file = public_path('uploads/file-sp2d/').$filesp2d->file_sp2d;
        return response()->download($file, $filesp2d->file_sp2d);
    }
}
