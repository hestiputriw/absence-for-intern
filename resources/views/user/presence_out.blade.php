@extends('layouts.dashboard_user')
@section('title', 'Presence Out')

@section('content')
<div class="wrapper">
    <div class="main">
        <div class="section text-center landing-section">
            <div class="container tim-container">
                <div class="row">
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ session('message') }} </strong>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-primary" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Scan QR Code</h2>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item" id="preview"></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{url('user/presence/out')}}" method="POST">
        @csrf
        <input type="hidden" name="code" id="code">
        <button type="submit" hidden id="submit">Register</button>
    </form>
</div>
@endsection

@section('js')
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        $('#code').val(content)
        $('#submit').click()
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.log('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
</script>

@endsection
