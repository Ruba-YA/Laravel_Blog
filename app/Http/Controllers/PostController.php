<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        \Illuminate\Support\Facades\DB::listen(function($query)
        {
            logger($query->sql);
        });
        $posts = Post::with('category')->get();
        return view('posts',['posts'=> $posts ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view ('post',['post'=>$post]);
    }
}
