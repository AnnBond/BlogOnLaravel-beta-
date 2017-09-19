@extends('default_layout')

@section('content')

<div class="container">
    <br>
    <div class="row">
        <div class="content col-9">
            <div class="wrapper">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="card col-6" >
                        <div class="card-body">
                            <p class="date">{{ $post->created_at }}</p>
                            <h4><a href="{{ route('singlePost', ['id'=> $post->id]) }}" class="card-title">{{ $post->title }}</a></h4>
                            <p class="cost">{{ $post->cost }}</p>
                            <p class="card-text">Author: {{ $post->author->name }}</p>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </div> <br>
                    @endforeach
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

@endsection