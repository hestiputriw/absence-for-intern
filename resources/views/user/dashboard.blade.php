@extends('layouts.dashboard_user')
@section('title', 'Dashboard')

@section('content')
<div class="wrapper">
    <div class="landing-header" style="background-image: url('../img/background.png');">
        <div class="container tim-container">
            <div class="motto">
                <h1 class="title-uppercase mtom">Hello, </h1>
                <h3 class="mtop"> {{ Auth::user()->name }} !</h3>
            </div>
            <div class="row">
                @if (session('success'))
                <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> {{ session('success') }} </strong>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissable custom-success-box" style="margin: 15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> {{ session('error') }} </strong>
                </div>
                @endif
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
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-12 mx-auto">
                        <img src="{{ asset('img/presin.png') }}" alt="Rounded Image" class="img-rounded img-responsive">
                        <br>
                        <a href="{{ url("user/presence/in") }}" class="btn btn-fill btn-info">Presence In</a>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <img src="{{ asset('img/presout.png') }}" alt="Rounded Image"
                            class="img-rounded img-responsive">
                        <br>
                        <a href="{{ url("user/presence/out") }}" class="btn btn-fill btn-info">Presence Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
