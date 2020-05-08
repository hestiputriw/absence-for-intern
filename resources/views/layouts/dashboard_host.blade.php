<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
	{{-- <link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico"> --}}
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ct-paper.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <title>
        @yield('title')
    </title>
</head>

<body onload=display_ct();>
    <nav class="navbar navbar-ct-primary" role="navigation-demo" id="demo-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="{{ url("host") }}" class="btn btn-danger btn-fill">
                    Back
                </a>
            </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navigation-example-2">
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-nav navbar-right">
                        <p class="btn btn-danger btn-fill">
                            <span id='ct' ></span>
                        </p>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>

    <div class="wrapper">
        <div class="main">
            <div class="section navbar-ct-primary">
                <div class="container tim-container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <div class="section navbar-ct-primary">
                <div class="container tim-container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p class="line">Please scan the QRCode for your presence.<p>
                            <p class="line">The QRCode will be replace in every 10 seconds.</p><br>
                            <p class="line">Thank you!</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
    <script src="{{ asset('js/jquery-1.10.2.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/bootstrap.js') }} " type="text/javascript"></script>

    <!--  Plugins -->
    <script src="{{ asset('js/ct-paper-checkbox.js') }}"></script>
    <script src="{{ asset('js/ct-paper-radio.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

    <script src="{{ asset('js/ct-paper.js') }} "></script>

    <script type="text/javascript"> 
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }
        
        function display_ct() {
        var date = new Date()
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        var tanggal = date.getDate();
        var hari = date.getDay();
        var jam = date.getHours();
        var menit = date.getMinutes();
        var detik = date.getSeconds();
        switch(hari) {
            case 0: hari = "Sun"; break;
            case 1: hari = "Mon"; break;
            case 2: hari = "Tues"; break;
            case 3: hari = "Wed"; break;
            case 4: hari = "Thurs"; break;
            case 5: hari = "Fri"; break;
            case 6: hari = "Sat"; break;
        }
        switch(bulan) {
            case 0: bulan = "Jan"; break;
            case 1: bulan = "Feb"; break;
            case 2: bulan = "Mar"; break;
            case 3: bulan = "Apr"; break;
            case 4: bulan = "May"; break;
            case 5: bulan = "Jun"; break;
            case 6: bulan = "Jul"; break;
            case 7: bulan = "Aug"; break;
            case 8: bulan = "Sept"; break;
            case 9: bulan = "Oct"; break;
            case 10: bulan = "Nov"; break;
            case 11: bulan = "Dec"; break;
        }
        var x1 = hari + ", " + tanggal + " " + bulan + " " + tahun + " " + jam + ":" + menit + ":" + detik;

        document.getElementById('ct').innerHTML = x1;
            display_c();
        }
    </script>
</html>