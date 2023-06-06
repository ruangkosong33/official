<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Law;
use App\Models\Filelaw;

class LawController extends Controller
{
    public function index($slug)
    {
        $law = Law::with('filelaw')->where('slug',$slug)->first();
        return view('landing.pages.law.index-law',['law'=>$law]);
    }

    public function downloadFile($slug)
    {
        $filelaw = Filelaw::where('slug',$slug)->first();
        $file = public_path('uploads/Produk-Hukum/').$filelaw->file_filelaw;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $filelaw->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }
}
