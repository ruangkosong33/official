<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renja;

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


}
