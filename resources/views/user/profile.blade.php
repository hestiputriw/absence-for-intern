@extends('layouts.dashboard_user')
@section('title', 'Users Profile')

@section('content')
<div class="wrapper">
    <div class="profile-background"> 
        <div class="filter-black"></div>  
    </div>
    <div class="profile-content section-nude">
        <div class="container">
            <div class="row owner">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 text-center">
                    <div class="avatar">
                        <img src="{{ asset('img/logo-small.png') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="name">
                        <h3>{{ Auth::user()->name }}<br /><small><i class="fa fa-university"></i> {{ Auth::user()->institute }}</small></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <a href="{{ url("user/profile/update/") }}" class="btn btn-info btn-fill btn-block btn-top"><i class="fa fa-pencil-square-o"></i> Update</a>
                </div>
            </div>     
        </div>
    </div>
</div>
@endsection
