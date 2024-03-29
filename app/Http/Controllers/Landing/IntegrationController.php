<?php

namespace App\Http\Controllers\Landing;

use App\Models\Sop;
use App\Models\Apbd;
use App\Models\Lppd;
use App\Models\Lkjip;
use App\Models\Renja;
use App\Models\Rpjmd;
use App\Models\Sidata;
use App\Models\Filesop;
use App\Models\Renstra;
use App\Models\Fileapbd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function rpjmd()
    {
        $rpjmds = Rpjmd::latest()->get();
        return view('landing.pages.integration.rpjmd-integration',['rpjmds'=>$rpjmds]);
    }

    public function downloadFileRpjmd($slug)
    {
        $rpjmd = Rpjmd::where('slug',$slug)->first();
        $file = public_path('uploads/file-rpjmd/').$rpjmd->file_rpjmd;
        return response()->download($file, $rpjmd->file_rpjmd);
    }

    public function lkjip()
    {
        $lkjips = Lkjip::latest()->get();
        return view('landing.pages.integration.lkjip-integration',['lkjips'=>$lkjips]);
    }

    public function downloadFileLkjip($slug)
    {
        $lkjip = Lkjip::where('slug',$slug)->first();
        $file = public_path('uploads/file-lkjip/').$lkjip->file_lkjip;
        return response()->download($file, $lkjip->file_lkjip);
    }

    public function lppd()
    {
        $lppds = Lppd::latest()->get();
        return view('landing.pages.integration.lppd-integration',['lppds'=>$lppds]);
    }

    public function downloadFileLppd($slug)
    {
        $lppd = Lppd::where('slug',$slug)->first();
        $file = public_path('uploads/file-lppd/').$lppd->file_lppd;
        return response()->download($file, $lppd->file_lppd);
    }

    public function sidata()
    {
        $sidatas = Sidata::latest()->get();
        return view('landing.pages.integration.sidata-integration',['sidatas'=>$sidatas]);
    }

    public function downloadFileSidata($slug)
    {
        $sidata = Sidata::where('slug',$slug)->first();
        $file = public_path('uploads/file-sidata/').$sidata->file_sidata;
        return response()->download($file, $sidata->file_sidata);
    }

    public function sop($slug)
    {
        $sop = Sop::with('filesop')->where('slug',$slug)->first();
        return view('landing.pages.integration.sop-integration',['sop'=>$sop]);
    }

    public function downloadFileSop($slug)
    {
        $filesop = Filesop::where('slug',$slug)->first();
        $file = public_path('uploads/file-sop/').$filesop->file_sop;
        return response()->download($file, $filesop->file_sop);
    }

    public function apbd($slug)
    {
        $apbd = Apbd::where('slug',$slug)->first();
        $apbds = Apbd::where('year',$apbd->year)->get();
        return view('landing.pages.integration.apbd-integration',['apbd'=>$apbd,'apbds'=>$apbds]);
    }

    public function downloadFileApbd($slug)
    {
        $fileapbd = Fileapbd::where('slug',$slug)->first();
        $file = public_path('uploads/file-apbd/').$fileapbd->file_apbd;
        return response()->download($file, $fileapbd->file_apbd);
    }

}
