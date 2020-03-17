@extends('layouts.dashboard_public')
@section('title','Login')

@section('content')    
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
        <div class="register-card">
            <h3 class="title">Welcome</h3>
            <form class="register-form">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="username" id="username" name="username">

                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                <a href="{{ url("user") }}" class="btn btn-info btn-fill btn-block">Login</a>
            </form>
            <div class="forgot">
                <a href="{{ url("register") }}" class="btn btn-danger btn-fill btn-block">Register</a>
            </div>
        </div>
    </div>
@endsection