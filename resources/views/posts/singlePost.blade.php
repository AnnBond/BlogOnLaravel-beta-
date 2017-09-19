@extends('default_layout')

@section('content')

<div class="container">
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
    </div>
</div>

@endsection