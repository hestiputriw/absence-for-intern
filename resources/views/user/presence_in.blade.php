@extends('layouts.dashboard_user')
@section('title', 'Presence In')

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
                <div class="row align-content-center">
                    <div class="col-md-12">
                        <canvas></canvas>
                        <ul></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{url('user/presence/in')}}" method="POST">
        @csrf
        <input type="hidden" name="code" id="code">
        <button type="submit" hidden id="submit">Register</button>
    </form>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/qrscan/qrcodelib.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/qrscan/webcodecamjquery.js') }}"></script>
<script>
    var args = {
        frameRate: 25,
        DecodeQRCodeRate: 2,
        flipHorizontal: true,
        beep: 'http://192.168.1.4:8000/sound/beep.mp3',
        autoBrightnessValue: 0,
        // contrast: 200,
        grayScale: true,
        zoom: 1,
        width: 320,
        height: 300,
        threshold: 500,
        resultFunction: function(result) {
            $('#code').val(result.code)
            $('#submit').click()
            }
        };
        var decoder = $("canvas").WebCodeCamJQuery(args).data().plugin_WebCodeCamJQuery;
        // decoder.buildSelectMenu("select");
        decoder.play();
        /*  Without visible select menu
            decoder.buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
        */
        $('select').on('change', function(){
            decoder.stop().play();
        })
</script>
@endsection
