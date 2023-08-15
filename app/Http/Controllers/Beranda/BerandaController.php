<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Post;
use App\Models\Event;
use App\Models\Banner;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Goalobjective;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $banners=Banner::latest()->get();
        $latestEvent=Event::latest()->take(4)->get();
        $latestGallery=Gallery::latest()->take(15)->get();
        $latestPost=Post::latest()->take(6)->get();
        $goal=Goalobjective::latest()->get();


        return view('landing.pages.beranda.index-beranda', [
            'banners'=>$banners,
            'latestPost'=>$latestPost,
            'latestEvent'=>$latestEvent,
            'latestGallery'=>$latestGallery,
            'goal'=>$goal,
        ]);
    }
}
