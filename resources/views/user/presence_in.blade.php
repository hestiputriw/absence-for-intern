@extends('layouts.dashboard_user')
@section('title', 'Presence In')

@section('content')
    <div class="wrapper">
        <div class="main">
            <div class="section text-center landing-section">
                <div class="container tim-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2>Scan QR Code</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <form action="{{url('user/presence/in')}}" method="POST">
                                @csrf
                                <label>Kode</label>
                                <input type="text" class="form-control" placeholder="Kode" name="code">

                                <button type="submit" class="btn btn-info btn-fill btn-block">Register</button>
                            </form>
                            {{-- For Cam --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection