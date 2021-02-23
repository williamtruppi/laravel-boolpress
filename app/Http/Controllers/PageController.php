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

    public function posts_api()
    {
        return view('spa.posts');
    }

    public function categories()
    {
        return view('spa.categories');
    }

}