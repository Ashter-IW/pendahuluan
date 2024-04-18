<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    // get all post
    $posts=Post::latest()->get();
    // dd($posts);
    return view('posts',compact('posts'));
    }
}
