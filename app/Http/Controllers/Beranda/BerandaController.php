<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Banner;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $banners=Banner::latest()->get();
        $latestEvent=Event::latest()->take(4)->get();
        $latestGallery=Gallery::latest()->take(15)->get();
        $latestPost=Post::latest()->take(6)->get();


        return view('landing.pages.beranda.index-beranda', [
            'banners'=>$banners,
            'latestPost'=>$latestPost,
            'latestEvent'=>$latestEvent,
            'latestGallery'=>$latestGallery,
        ]);
    }
}
