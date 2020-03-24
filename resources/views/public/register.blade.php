@extends('layouts.dashboard_public')
@section('title','Register')

@section('content')
    @if ($errors->any())
    <div class="alert alert-primary" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif    
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
        <div class="register-card">
            <h3 class="title">Welcome</h3>
            <form class="register-form" action="{{url('register')}}" method="POST">
                @csrf
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" id="name" name="name">

                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username">

                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" id="email" name="email">

                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">

                <label>Institute</label>
                <input type="text" class="form-control" placeholder="Institute" id="institute" name="institute">

                <label>Address</label>
                <textarea class="form-control" rows="3" id="address" name="address"></textarea>

                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">

                <button type="submit" class="btn btn-info btn-fill btn-block">Register</button>
            </form>
        </div>
    </div>
@endsection