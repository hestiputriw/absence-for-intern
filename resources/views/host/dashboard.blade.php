<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ct-paper.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <style>
        .text-white {
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="wrapper w-100">
        <div class="main">
            <div class="section navbar-ct-primary">
                <div class="container tim-container">
                    <a href="{{ url("/logout") }}" class="btn btn-fill btn-danger">Log Out</a>
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <div class="text-center text-white">
                                <h2>Choose Presence</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section navbar-ct-primary">
                <div class="container tim-container">
                    <div class="row justify-content-md-center line">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-3">
                                    <img src="{{ asset('img/presin.png') }}" alt="Rounded Image"
                                        class="img-rounded img-responsive linef">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-3">
                                    <img src="{{ asset('img/presout.png') }}" alt="Rounded Image"
                                        class="img-rounded img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section navbar-ct-primary">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-4">
                                    <a href="{{ url("host/presence/in") }}"
                                        class="btn btn-fill btn-danger linef">Presence In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-3">
                                    <a href="{{ url("host/presence/out") }}"
                                        class="btn btn-fill btn-danger liner">Presence Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 col-md-offset-4">
                            <h5 class="lines liner"> &emsp; &copy; Seven Media Technology </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>