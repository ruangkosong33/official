<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asset;

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
}
