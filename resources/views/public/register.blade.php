@extends('layouts.dashboard_public')
@section('title','Register')

@section('content')   
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
        <div class="register-card">
            <h3 class="title">Welcome</h3>
            <form class="register-form" action="{{url('register')}}" method="POST">
                @csrf
                <label>Name</label>
                <input type="text" class="form-control color-text" placeholder="Name" id="name" name="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <label>Username</label>
                <input type="text" class="form-control color-text" placeholder="Username" id="username" name="username">
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <label>Email</label>
                <input type="text" class="form-control color-text" placeholder="Email" id="email" name="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <label>Password</label>
                <input type="password" class="form-control color-text" placeholder="Password" id="password" name="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <label>Institute</label>
                <input type="text" class="form-control color-text" placeholder="Institute" id="institute" name="institute">
                @error('institute')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <label>Address</label>
                <textarea class="form-control color-text" rows="3" id="address" name="address"></textarea>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <label>Phone Number</label>
                <input type="text" class="form-control color-text" placeholder="Phone" id="phone" name="phone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span><br>
                @enderror

                <button type="submit" class="btn btn-info btn-fill btn-block">Register</button>

                <div class="forgot">
                    <a href="{{ url("/") }}" class="btn btn-danger btn-fill btn-block">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection