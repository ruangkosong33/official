<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Download;
use App\Models\Auction;
use App\Models\Filedownload;

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
}
