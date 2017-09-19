<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function singlePost (Posts $post) {

        /*$post = Posts::with('author', 'category')->find($id);*/

        return view('posts.singlePost', compact('post'));
    }
}
