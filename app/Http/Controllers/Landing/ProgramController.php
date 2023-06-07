<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Realisation;
use App\Models\Bansos;
use App\Models\Responsible;

class ProgramController extends Controller
{
    public function realisation()
    {
        $realisations = Realisation::latest()->get();
        return view('landing.pages.program.realisation-program',['realisations'=>$realisations]);
    }

    public function downloadFileRealisation($slug)
    {
        $realisation = Realisation::where('slug',$slug)->first();
        $file = public_path('uploads/file-realisasi/').$realisation->file_realisation;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $realisation->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }

}
