<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest();
        return view('posts',['posts'=> $posts ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view ('post',['post'=>$post]);
    }

    public function search()
    {
        $posts = Post::latest();
        if(request('search'))
        {
            $posts->where('title' , 'like','%'.request('search').'%')
                  ->orwhere('description','like','%'.request('search').'%');
        }
        return view('posts',['posts'=> $posts->get()]);
    }
}
