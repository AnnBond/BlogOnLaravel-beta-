@extends('default_layout')

@section('content')

<div class="container">
    <div class="allCategories">
            <div class="row" style="padding: 20px;">
                @foreach($categories as $category)
                    <div class="card col-4">
                    <a href="{{ route('categoryById', ['id'=> $category->id]) }}" class="card-title">{{ $category->name }}</a>
                    <p class="card-text">{{ $category->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
