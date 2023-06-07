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

    public function bansos()
    {
        $allbansos = Bansos::latest()->get();
        return view('landing.pages.program.bansos-program',['allbansos'=>$allbansos]);
    }

    public function downloadFileBansos($slug)
    {
        $bansos = Bansos::where('slug',$slug)->first();
        $file = public_path('uploads/file-bansos/').$bansos->file_bansos;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $bansos->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }

    public function responsible()
    {
        $responsibles = Responsible::latest()->get();
        return view('landing.pages.program.responsible-program',['responsibles'=>$responsibles]);
    }

    public function downloadFileResponsible($slug)
    {
        $responsible = Responsible::where('slug',$slug)->first();
        $file = public_path('uploads/file-Program-Kegiatan/').$responsible->file_responsible;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $responsible->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }

}
