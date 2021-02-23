<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    /* public function posts()
    {
        $posts = Post::all();
        return view('posts.index', compact("posts"));
    } */
}