<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transparency;
use App\Models\Filetransparency;

class TransparencyController extends Controller
{
    public function index()
    {
        $transparencies = Transparency::all();
        return view('landing.pages.transparency.index-transparency',['transparencies'=>$transparencies]);
    }

    public function downloadFile($slug, $type = null)
    {
        $filetransparency = Filetransparency::where('slug',$slug)->first();
        $file = public_path('uploads/file-transparansi/').$filetransparency->file_transparency;
        // $headers = ['Content-Type: application/pdf'];
    	// $fileName = $filetransparency->slug.'-'.time().'.pdf';
        // return response()->download($file, $fileName, $headers);

        $headers = ['Content-Type: application/octet-stream'];

        if ($type === 'pdf') {
            $headers = ['Content-Type: application/pdf'];
        } elseif ($type === 'zip') {
            $headers = ['Content-Type: application/zip'];
        } elseif ($type !== null) {
            return response()->json(['error' => 'Unsupported file type'], 400);
        }

        $fileName = $filetransparency->slug . '-' . time();

        if ($type) {
            $fileName .= '.' . $type;
        }

        return response()->download($file, $fileName, $headers);
    }
}
