<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renja;
use App\Models\Renstra;

class IntegrationController extends Controller
{
    public function renja()
    {
        $renjas = Renja::latest()->get();
        return view('landing.pages.integration.renja-integration',['renjas'=>$renjas]);
    }

    public function downloadFileRenja($slug)
    {
        $renja = Renja::where('slug',$slug)->first();
        $file = public_path('uploads/file-renja/').$renja->file_renja;
    	$fileName = $renja->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName);
    }

    public function renstra()
    {
        $renstras = Renstra::latest()->get();
        return view('landing.pages.integration.renstra-integration',['renstras'=>$renstras]);
    }

    public function downloadFileRenstra($slug)
    {
        $renstra = Renstra::where('slug',$slug)->first();
        $file = public_path('uploads/file-renstra/').$renstra->file_renstra;
        return response()->download($file, $renstra->file_renstra);
    }

    
}
