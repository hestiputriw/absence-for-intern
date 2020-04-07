@extends('layouts.dashboard_user')
@section('title', 'Users Profile')

@section('content')
<div class="wrapper">
    <div class="row row-profile">
        <div class="col-md-4 row-profile"> 
            <div class="profile-background"> 
                <div class="filter-black"></div>  
                <div class="row">
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong> {{ session('message') }} </strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="profile-content">
                <div class="row owner-profile row-profile justify-content-center">
                    <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                        <div class="avatar">
                            <img src="{{ asset('img/logo-small.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                        <div class="name">
                            <h3>{{ Auth::user()->name }}<br /><small><i class="fa fa-university"></i> {{ Auth::user()->institute }}</small></h3>
                        </div>
                    </div>
                </div>
                <div class="row row-profile justify-content-center">
                    <div class="col">
                        <a href="{{ url("user/profile") }}" class="btn btn-info btn-fill btn-block btn-top"><i class="fa fa-user"></i> Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 row-profile">
            <div class="container-profile">
                <div class="card card-profile">
                    <form class="register-form" action="{{url('user/profile/update')}}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-8"> 
                                <label>Name</label>
                                <input type="text" class="form-control color-text top" placeholder="Name" value="{{ Auth::user()->name }}" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                                @enderror        
                            </div>
                            <div class="col-md-4">
                                <label>Username</label>
                                <input type="text" class="form-control color-text top" placeholder="Username" value="{{ Auth::user()->username }}" name="username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-5">
                                <label>Email</label>
                                <input type="text" class="form-control color-text top" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label>Password</label>
                                <input type="password" class="form-control color-text top" placeholder="Password" value="{{ Auth::user()->password }}" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Phone Number</label>
                                <input type="text" class="form-control color-text top" placeholder="Phone" value="{{ Auth::user()->phone }}" name="phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                                @enderror
                
                            </div>
                        </div>
        
                        <label>Institute</label>
                        <input type="text" class="form-control color-text top" placeholder="Institute" value="{{ Auth::user()->institute }}" name="institute">
                        @error('institute')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span><br>
                        @enderror
        
                        <label>Address</label>
                        <textarea class="form-control color-text top" rows="3" name="address">{{ Auth::user()->address }}</textarea>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span><br>
                        @enderror
                        
                        <button type="submit" class="btn btn-info btn-fill btn-block btn-top"><i class="fa fa-pencil-square-o"></i> Update</button>
                    </form>
                </div>    
            </div>        
        </div>
    </div>    
</div>
@endsection
