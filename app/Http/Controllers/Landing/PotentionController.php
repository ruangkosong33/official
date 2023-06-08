<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Pad;
use App\Models\Filepad;

class PotentionController extends Controller
{
    public function asset()
    {
        $assets = Asset::latest()->get();
        return view('landing.pages.potention.asset-potention',['assets'=>$assets]);
    }

    public function downloadFileAsset($slug)
    {
        $asset = Asset::where('slug',$slug)->first();
        $file = public_path('uploads/file-asset/').$asset->file_asset;
        $headers = ['Content-Type: application/pdf'];
    	$fileName = $asset->slug.'-'.time().'.pdf';
        return response()->download($file, $fileName, $headers);
    }
    
    
    public function pad($slug)
    {
        $pad = Pad::where('slug',$slug)->first();
        return view('landing.pages.potention.pad-potention',['pad'=>$pad]);
    }

    public function downloadFileFilepad($slug)
    {
        $filepad = Filepad::where('slug',$slug)->first();
        $file = public_path('uploads/file-pad/').$filepad->file_filepad;
        return response()->download($file, $filepad->file_filepad);
    }
}
