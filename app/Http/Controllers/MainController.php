<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
    public function index() {
        $posts = Post::latest()->with('author', 'category')->get();

        return view('main.main', compact('posts'));
    }

    public function about() {
        return view('main.about');
    }
}
