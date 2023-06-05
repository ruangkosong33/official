<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $banner=Banner::latest()->get();
        
        return view('landing.pages.beranda.index-beranda', ['banner'=>$banner]);
    }
}
