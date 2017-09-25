<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'login']);
    }

    public function create() {

        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required'
        ]);

        /*auth()->user()->publish(
            new Post(request(['title', 'description', 'cost', 'category_id' => 12 ]))
        );*/
        //dd(request(['title', 'description']));
        $post = new Post;

        Post::create([
           'title' => request('title'),
            /*'slug' => request('title'),*/
            'user_id' => auth()->id(),
            'category_id' => '5',
            'description' => request('description'),
            'cost' => request('cost')
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {

        /*$post = Posts::with('author', 'category')->find($id);*/

        return view('posts.singlePost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
