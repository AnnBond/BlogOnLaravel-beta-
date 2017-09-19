@extends('default_layout')

@section('content')
    <div class="wrapper">
        <div class="row">
            <?php foreach ($posts as $post): ?>
            <div class="card col-6" >
                <div class="card-body">
                    <p class="date">{{ $post->created_at }}</p>
                    <h4 class="card-title"><a href="{{ route('singlePost', ['id'=> $post->id]) }}" class="card-title">{{ $post->title }}</a></h4>
                    <p class="cost">{{ $post->cost }}</p>
                    <p class="card-text">Author: {{ $post->author->name }}</p>
                    <p class="cost">Category: <a href="{{ route('categoryById', ['id'=> $post->category_id]) }}" class="card-title">{{
                        $post->category->name
                        }}</a></p>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="{{ route('singlePost', ['id'=> $post->id]) }}" class="btn btn-primary">See more</a>
                </div>
            </div> <br>
            <?php endforeach; ?>
        </div>
        <br>
    </div>
    @endsection