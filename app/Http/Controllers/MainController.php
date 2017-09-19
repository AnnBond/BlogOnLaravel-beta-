<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class MainController extends Controller
{
    public function index() {
        $posts = Posts::with('author', 'category')->get();

        return view('main.main', compact('posts'));
    }
}
