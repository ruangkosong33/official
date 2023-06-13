<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Banner;
use App\Models\Post;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $banners=Banner::latest()->get();
        $latestGallery=Gallery::latest()->take(15)->get();
        $latestPost=Post::latest()->take(3)->get();


        return view('landing.pages.beranda.index-beranda', [
            'banners'=>$banners,
            'latestPost'=>$latestPost,
            'latestGallery'=>$latestGallery,
        ]);
    }
}
