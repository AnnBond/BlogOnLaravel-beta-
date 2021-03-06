@extends('default_layout')

@section('content')
    <h1>Create a post</h1>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control"  name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="number" class="form-control" id="cost" placeholder="200" name="cost">
        </div>
        <div class="form-group">
            <label for="addCategory">Category</label>
            <select class="form-control" name="category_id" id="addCategory">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @include('layouts.errors')
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
    </form>

@endsection