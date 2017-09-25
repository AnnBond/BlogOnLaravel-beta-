@extends('default_layout')

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <h1>login</h1>
            <form method="POST" action="/login">

                {{ csrf_field() }}

                <div class="form-group">
                    <lable for="email">Email: </lable>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <lable for="password">Pass: </lable>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit">Log in</button>
                </div>
                @include('layouts.errors')
            </form>
        </div>
    </div>
    @endsection