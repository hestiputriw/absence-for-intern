<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />

    <title>
        @yield('title')
    </title>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="black" data-active-color="danger">
            <div class="logo">
                <a href="{{ url("admin") }}" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{ asset('img/logo-small.png') }}">
                    </div>
                </a>
                <a href="{{ url("admin") }}" class="simple-text logo-normal">
                    SMTPresence
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="@if(request()->is('admin')) active @endif">
                        <a href="{{ url("admin") }}">
                            <i class="fa fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="@if(request()->is('admin/users')) active  @endif">
                        <a href="#users" data-toggle="collapse">
                            <i class="fa fa-address-book"></i>
                            <p>Users</p>
                        </a>

                        <div id="users" class="collapse">
                            <ul>
                                <li class="@if(request()->is('admin/users')) active  @endif">
                                    <a href="{{ url("admin/users") }}">
                                        <i class="fa fa-wpforms"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                                <li class="@if(request()->is('admin/users/validated')) active  @endif">
                                    <a href="{{ url("admin/users/validated") }}">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <p>Validated Users</p>
                                    </a>
                                </li>
                                <li class="@if(request()->is('admin/users/unvalidated')) active  @endif">
                                    <a href="{{ url("admin/users/unvalidated") }}">
                                        <i class="fa fa-calendar-times-o"></i>
                                        <p style="font-size:8pt">Unvalidated Users</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="@if(request()->is('admin/presence')) active  @endif">
                        <a href="#presence" data-toggle="collapse">
                            <i class="fa fa-th-list"></i>
                            <p>Presence</p>
                        </a>

                        <div id="presence" class="collapse">
                            <ul>
                                <li class="@if(request()->is('admin/presence')) active  @endif">
                                    <a href="{{ url("admin/presence") }}">
                                        <i class="fa fa-list-alt"></i>
                                        <p>Presence</p>
                                    </a>
                                </li>
                                <li class="@if(request()->is('admin/presence/statistic')) active  @endif">
                                    <a href="{{ url("admin/presence/statistic") }}">
                                        <i class="fa fa-bar-chart"></i>
                                        <p>Statistic</p>
                                    </a>
                                </li>
                                <li class="@if(request()->is('admin/presence/day')) active  @endif">
                                    <a href="{{ url("admin/presence/day") }}">
                                        <i class="fa fa-line-chart"></i>
                                        <p>Statistic Day</p>
                                    </a>
                                </li>
                                <li class="@if(request()->is('admin/presence/violations')) active  @endif">
                                    <a href="{{ url("admin/presence/violations") }}">
                                        <i class="fa fa-gavel"></i>
                                        <p>Violations</p>
                                    </a>
                                </li>
                                <li class="@if(request()->is('admin/presence/violation-logs')) active  @endif">
                                    <a href="{{ url("admin/presence/violation-logs") }}">
                                        <i class="fa fa-file-text"></i>
                                        <p>Violation Logs</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="{{ url("admin") }}">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    {{-- Search --}}
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            {{-- <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="{{ url("logout") }}">
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="fa fa-users text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">All Users</p>
                                            <p class="card-title">{{ Auth::user()->where('role', 'user')->count() }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url("admin/users") }}">
                                <div class="card-footer decor">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-chevron-circle-right"></i> More Info
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="fa fa-address-book text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Presence</p>
                                            <p class="card-title">0<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url("admin/presence") }}">
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-chevron-circle-right"></i> More Info
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="fa fa-bar-chart text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Statistic</p>
                                            <p class="card-title">23 %</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url("admin/presence/statistic") }}">
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-chevron-circle-right"></i> More Info
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="fa fa-gavel text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Violation Logs</p>
                                            <p class="card-title">3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url("admin/presence/violation-logs") }}">
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-chevron-circle-right"></i> More Info
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> SEVEN MEDIA TECHNOLOGY
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
    {{-- <script>
        $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
        });
    </script> --}}
</body>

</html>