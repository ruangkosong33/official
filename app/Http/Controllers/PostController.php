<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $post=Post::with(['category','user'])->latest()->paginate(7);

        return view('admin.pages.post.index-post', ['post'=>$post]);
    }

    public function create()
    {
        $category=Category::all();
        $user=User::all();

        return view('admin.pages.post.create-post', ['category'=>$category,'user'=>$user]);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images-post'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function store(Request $request)
    {
        $post=$request->validate([
            'title_post'=>'required',
            'description_post'=>'required',
            'image_post'=>'required|mimes:jpg,png,jpeg|max:3000',
            'status'=>'required',
        ]);

        if($request->file('image_post'))
        {
            $image_posts=$request->file('image_post');
            $imageextension=$image_posts->getClientOriginalName();
            $request->file('image_post')->move(public_path('image-post'), $imageextension);
        }


        $post=Post::create([
            'title_post'=>$request->title_post,
            'slug'=>Str::slug($request->title_post),
            'description_post'=>$request->description_post,
            'image_post'=>$imageextension,
            'category_id'=>$request->category_id,
            'user_id'=>Auth::id(),
            'status'=>$request->status,
        ]);

        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post=Post::findOrFail($id);
        $category=Category::all();

        return view('admin.pages.post.edit-post', ['post'=>$post, 'category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $post=$request->validate([
            'title_post'=>'required',
            'description_post'=>'required',
            'category_id'=>'required',
            'image_post'=>'mimes:jpg,png,jpeg|max:3000',
            'status'=>'required',
        ]);

        $post=Post::findOrFail($id);

        if($request->file('image_post'))
        {
            $image_posts=$request->file('image_post');
            $imageextension=$image_posts->getClientOriginalName();
            $request->file('image_post')->move(public_path('image-post', $imageextension));
        }else{

            unset($post['image_post']);
        }

        $post->update([
            'title_post'=>$request->title_post,
            'slug'=>Str::slug($request->title_post),
            'description_post'=>$request->description_post,
            'image_post'=>$imageextension,

        ]);

        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        $post=Post::findOrFail($id);

        $post->delete();

        return redirect()->route('post.index');
    }

}
