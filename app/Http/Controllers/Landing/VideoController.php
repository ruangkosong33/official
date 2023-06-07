<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Post;
use App\Models\Category;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('landing.pages.video.index-video',['videos'=>$videos]);
    }

    public function detail($slug)
    {
        $video = Video::where('slug',$slug)->first();
        $latestPosts = Post::latest()->limit(3)->get();
        $categories = Category::all();
        return view('landing.pages.video.detail-video',[
            'video'=>$video,
            'categories'=>$categories,
            'latestPosts'=>$latestPosts,
        ]);
    }
}
