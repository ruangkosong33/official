<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Category;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('landing.pages.gallery.index-gallery',['galleries'=>$galleries]);
    }

    public function detail($slug)
    {
        $gallery = Gallery::where('slug',$slug)->first();
        $latestPosts = Post::latest()->limit(3)->get();
        $categories = Category::all();
        return view('landing.pages.gallery.detail-gallery',[
            'gallery'=>$gallery,
            'categories'=>$categories,
            'latestPosts'=>$latestPosts,
        ]);
    }
}
