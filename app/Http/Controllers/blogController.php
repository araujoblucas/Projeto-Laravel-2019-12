<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('Blog');
    }
    public function post_show($id){
        $post = Post::findorfail($id);
        return view('PostShow')->withPost($post);
    }
}
