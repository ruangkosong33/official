<?php

namespace App\Http\Controllers\Landing;

use App\Models\Bba;
use App\Models\Hostel;
use App\Models\Auction;
use App\Models\Filebba;
use App\Models\Download;
use App\Models\Filedownload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicinfoController extends Controller
{
    public function download($slug)
    {
        $download = Download::where('slug',$slug)->first();
        // dd($download->filedownload);
        return view('landing.pages.publicinfo.download-publicinfo',['download'=>$download]);
    }

    public function downloadFile($slug)
    {
        $download = Filedownload::where('slug',$slug)->first();
        $file = public_path('uploads/file-download/').$download->file_download;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $download->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }

    public function bba($slug)
    {
        $bbaWithFiles = Bba::with('filebba')->first();
        // dd($bbaWithFiles->filebba);
        return view('landing.pages.publicinfo.bba-publicinfo',['bbaWithFiles'=>$bbaWithFiles]);
    }

    public function downloadFileBba($slug)
    {
        $bba = Filebba::where('slug',$slug)->first();
        // dd($slug);
        $file = public_path('uploads/file-bba/').$bba->file_bba;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $bba->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }

    public function auction()
    {
        $auctions = Auction::latest()->get();
        return view('landing.pages.publicinfo.auction-publicinfo',['auctions'=>$auctions]);
    }

    public function downloadFileAuction($slug)
    {
        $auction = Auction::where('slug',$slug)->first();
        $file = public_path('uploads/file-lelang/').$auction->file_auction;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $auction->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }

    public function hostel()
    {
        $hostels = Hostel::latest()->get();
        return view('landing.pages.publicinfo.hostel-publicinfo',['hostels'=>$hostels]);
    }
}
