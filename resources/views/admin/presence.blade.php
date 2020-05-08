@extends('layouts.dashboard_admin')
@section('title', 'Presence')

@section('content')
    <div class="row"> 
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h5 class="card-title">Presence Today</h5>
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
                                    <h5 class="card-title">Statistic Presence</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <span> <b>Adikara Rudi</b> has 23% of Presence. </span>
                                    </div>
                                    <div class="alert alert-info">
                                        <span> <b>Tasdik Nasim</b> has 13% of Presence. </span>
                                    </div>
                                    <div class="alert alert-info">
                                        <span> <b>Jessica Septi</b> has 33% of Presence. </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h5 class="card-title">Violation Logs</h5>
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