@extends('layouts.dashboard_user')
@section('title', 'Dashboard')

@section('content')
    <div class="wrapper">
        <div class="landing-header" style="background-image: url('../img/background.png');">
            <div class="container tim-container">
                <div class="motto">
                    <h1 class="title-uppercase">Hello, </h1>
                    <h3>Username!</h3>
                </div>
            </div>    
        </div>
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3>Choose Your Presence</h3>
                            <br>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-xs-6  col-sm-3 col-md-2 col-md-offset-1">
                            <img src="{{ asset('img/presin.png') }}" alt="Rounded Image" class="img-rounded img-responsive">
                            <br>
                            <a href="{{ url("user/presence/in") }}" class="btn btn-fill btn-info">Presence In</a>
                        </div>
                        <div class="col-xs-6  col-sm-3 col-md-2 col-md-offset-1">
                            <img src="{{ asset('img/presout.png') }}" alt="Rounded Image" class="img-rounded img-responsive">
                            <br>
                            <a href="{{ url("user/presence/out") }}" class="btn btn-fill btn-info">Presence Out</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection