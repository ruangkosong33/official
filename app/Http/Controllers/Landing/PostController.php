<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('landing.pages.post.index-post',['posts'=>$posts]);
    }

    public function detail($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $latestPosts = Post::latest()->limit(3)->get();
        $categories = Category::all();
        return view('landing.pages.post.detail-post',[
            'post'=>$post,
            'categories'=>$categories,
            'latestPosts'=>$latestPosts,
        ]);
    }
}
