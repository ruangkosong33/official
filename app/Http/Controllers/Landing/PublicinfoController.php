<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Download;

class PublicinfoController extends Controller
{
    public function download($slug)
    {
        $download = Download::where('slug',$slug);
        return view('landing.pages.publicinfo.download-publicinfo',['download'=>$download]);
    }
}
