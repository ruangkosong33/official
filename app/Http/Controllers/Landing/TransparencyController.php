<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transparency;
use App\Models\Filetransparency;

class TransparencyController extends Controller
{
    public function index()
    {
        $transparencies = Transparency::all();
        return view('landing.pages.transparency.index-transparency',['transparencies'=>$transparencies]);
    }

    public function downloadFile($slug)
    {
        $filetransparency = Filetransparency::where('slug',$slug)->first();
        $file = public_path('uploads/file-transparansi/').$filetransparency->file_transparency;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $filetransparency->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }
}
