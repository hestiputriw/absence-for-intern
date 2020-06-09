<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ct-paper.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard-custom.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <title>
        @yield('title')
    </title>
</head>

<body>
    <nav class="navbar navbar-ct-blue navbar-sticky-top " role="navigation-demo" id="demo-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url("user") }}">SMTPresence</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navigation-example-2">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ url("user") }}" class="btn btn-simple">Home</a>
                    </li>
                    <li>
                        <a href="{{ url("user/presence/info") }}" class="btn btn-simple">Info</a>
                    </li>
                    <li>
                        <a href="{{ url("user/profile") }}" class="btn btn-simple">Profile</a>
                    </li>
                    <li>
                        <a href="{{ url("logout") }}" class="btn btn-fill btn-danger">Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer-demo section-dark">
        <div class="container">
            <div class="text-center">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="copyright pull-right">
                            &copy; 2020 Seven Media Technology
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

<script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugins -->
<script src="{{ asset('js/ct-paper-checkbox.js') }}"></script>
<script src="{{ asset('js/ct-paper-radio.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/ct-paper.js') }}"></script>
@yield('js')

</html>
