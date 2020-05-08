@extends('layouts.dashboard_admin')
@section('title', 'Dashboard')

@section('content')
    <div class="row"> 
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h5 class="card-title">User Added</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <span><b>Hesti Putri</b> has been Registered. Give Account Validate!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h5 class="card-title">Presence</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <span>No one Presence Today!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h5 class="card-title">Violations</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <span> <b>Adikara Rudi</b> hasn't presence out yesterday!</span>
                                        <br>
                                    </div>
                                    <div class="alert alert-info">
                                        <span> <b>Vera Uyainah</b> hasn't presence out yesterday!</span>
                                        <br>
                                    </div>
                                    <div class="alert alert-info">
                                        <span> <b>Gasti Yuliarti</b> hasn't presence out yesterday!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection