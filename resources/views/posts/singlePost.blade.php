@extends('default_layout')

@section('content')

    <div class="post singlePost">
        <div class="card">
            <div class="row" style="padding: 20px;">
                <div class="card-body col-10">
                    <p class="date">{{ $post->created_at }}</p>
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="cost">{{ $post->cost }}</p>
                    <p class="cost">Category:
                        <a href="{{ route('categoryById', ['id'=> $post->category_id]) }}" class="card-title">{{
                        $post->category->name
                        }}</a>
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="comments">
            <ul class="list-group"></ul>
        @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong style="float: right;">{{ $comment->updated_at->diffForHumans() }}</strong>
                    <p>{{ $comment->body }}</p>
                    <i>Author: {{ $comment->author->name }}</i>
                </li>
            @endforeach
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/posts/{{ $post->id }}/comments" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="body">Typing your comment here:</label>
                        <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Your comment here: " required></textarea>
                    </div>
                    @include('layouts.errors')
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection