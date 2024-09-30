<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blogger | ADMIN</title>
    <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ asset('admin_assets/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset('admin_assets/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet">
    @stack('styles')

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img width="40%" alt="" class="rounded-circle" src="{{ asset('admin_assets/img/pngegg.png') }}" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">ADMIN</span>
                                <span class="text-muted text-xs block">Blogger | MANAGER</span>
                            </a>

                        </div>
                        <div class="logo-element">
                            ECO+
                        </div>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa-solid fa-house"></i><span class="nav-label">Dashboard</span> </span></a>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa-solid fa-user"></i> <span class="nav-label">Users</span> </span></a>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa-brands fa-product-hunt"></i> <span class="nav-label">Blog Posts</span> </span></a>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa-solid fa-layer-group"></i> <span class="nav-label">Categories   </span> </span></a>
                    </li>
                </ul>

            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li style="padding: 20px">
                            <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                        </li>
                        <li>
                            <a href="{{ route('admin.logout') }}">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            @yield('content')
            <div class="footer">
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Mainly scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('admin_assets/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <!-- Peity -->
    <script src="{{ asset('admin_assets/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/demo/peity-demo.js') }}"></script>
    <!-- Custom and plugin javascript -->
    <script src="{{ asset('admin_assets/js/inspinia.js') }}"></script>
    <script src="{{ asset('admin_assets/js/plugins/pace/pace.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin_assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- GITTER -->
    <script src="{{ asset('admin_assets/js/plugins/gritter/jquery.gritter.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin_assets/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Sparkline demo data  -->
    <script src="{{ asset('admin_assets/js/demo/sparkline-demo.js') }}"></script>
    <!-- ChartJS-->
    <script src="{{ asset('admin_assets/js/plugins/chartJs/Chart.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('admin_assets/js/plugins/toastr/toastr.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @stack('scripts')
</body>

</html>