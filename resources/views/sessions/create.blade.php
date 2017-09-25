@extends('default_layout')

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
<h1>Register</h1>
            <form method="POST" action="/register">

                {{ csrf_field() }}

                <div class="form-group">
                    <lable for="name">Name: </lable>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <lable for="email">Email: </lable>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <lable for="password">Password: </lable>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <lable for="password_confirmation">Confirm Password: </lable>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <div class="form-group">
                    <lable for="img">Img: </lable>
                    <input type="file" class="form-control" id="img" name="img" multiple>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                    @include('layouts.errors')
            </form>
        </div>
    </div>
    @endsection