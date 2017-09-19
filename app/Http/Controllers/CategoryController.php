<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\Categories;

class CategoryController extends Controller
{
    public function categories() {
        $categories = Categories::all();

        return view('categories', compact('categories'));
    }
    public function categoryById($id) {
        $title = 'Laravel';
        $posts = Posts::with('author', 'category')
            ->where('category_id', '=', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('categoryById', compact('title', 'posts'));
    }
}
