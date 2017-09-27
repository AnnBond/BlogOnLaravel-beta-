<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;

class MainController extends Controller
{
    public function index() {
        $posts = Post::latest()->with('author', 'category')->get();

        $categories = Categories::all();


        return view('main.main', compact('posts', 'categories'));
    }

    public function about() {
        return view('main.about');
    }
}
