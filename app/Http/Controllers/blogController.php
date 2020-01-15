<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $posts = Post::all();
        return view('Blog', [
            'posts' => $posts,
            ]);
    }
    public function post_show($id){
        $post = Post::findorfail($id);
        $recents = Post::where('id', '<>', $post->id)->orderBy('id', 'desc')->take(3)->get();
        return view('PostShow', [
            'post' => $post,
            'recents' => $recents
        ]);
    }
}
