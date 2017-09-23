@extends('default_layout')

@section('content')
    <div class="row">
    <div class="col-lg-9">
            <p class="float-right d-md-none">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
            <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-6 col-lg-4" style="padding: 50px 0;">
                    <p class="date">{{ $post->created_at->toFormattedDateString() }}</p>
                    <h4 class="card-title"><a href="/posts/{{ $post->id }}" class="card-title">{{ $post->title }}</a></h4>
                    <p class="cost">{{ $post->cost }}</p>
                    <p class="card-text">Author: {{ $post->author->name }}</p>
                    <p class="category">Category: <a href="/category/{{ $post->category_id }}" class="card-title">{{
                        $post->category->name
                        }}</a></p>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="/posts/{{ $post->id }}" class="btn btn-primary">See more</a>
                </div>
                <br>
            <?php endforeach; ?>
            </div>
    </div>
    @include('main.sidebar')
    </div>
    @endsection