<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/magdesign/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 16:07:02 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Blogger by dev-ARSAL</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">

                <div class="row">
                    <div class="col-md-6 text-center order-1 order-md-2 mb-3 mb-md-0">
                        <a href="{{route('account.dashboard')}}" class="logo m-0 text-uppercase">BLOGGER</a>
                    </div>
                    <div class="col-md-3 order-3 order-md-1">
                        <form action="#" class="search-form">
                            <span class="icon-search2"></span>
                            <input type="search" class="form-control" placeholder="Search...">
                        </form>
                    </div>

                    <div class="col-md-3 text-end order-2 order-md-3 mb-3 mb-md-0">
                        <div class="d-flex">
                            <ul class="list-unstyled social me-auto">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                @if(Auth::check())
                                <i class="fa fa-user"></i>
                                <span><b>{{ Auth::user()->name }}</b></span>
                                
                                @else
                                <li><a href="{{route('account.login')}}" class="btn btn-sm btn-primary">Login</a></li>
                                @endif
                            </ul>

                            <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block"
                                data-toggle="collapse" data-target="#main-navbar">
                                <span></span>
                            </a>
                        </div>

                    </div>
                </div>

                <ul class="js-clone-nav d-none d-lg-inline-none text-start site-menu float-end">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="has-children">
                        <a href="categories.html">Categories</a>
                        <ul class="dropdown">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Business</a></li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Technology</a></li>
                    @if(Auth::check())
                    <li><a href="{{ route('account.logout') }}" class="btn btn-sm btn-outline-primary me-2">Logout</a></li>
                    @else
                    <li><a href="{{route('account.login')}}" class="btn btn-sm btn-outline-primary me-2">Login</a></li>
                    <li><a href="{{route('account.register')}}" class="btn btn-sm btn-primary">Register</a></li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
    <div class="container-fluid" style="margin-block: 2% !important;">
        @yield('content')
    </div>

    <div class="py-5 bg-light mx-md-3 sec-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h4 fw-bold">Subscribe to newsletter</h2>
                </div>
            </div>
            <form action="#" class="row">
                <div class="col-md-8">
                    <div class="mb-3 mb-md-0">
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                </div>
                <div class="col-md-4 d-grid">
                    <input type="submit" class="btn btn-primary" value="Subscribe">
                </div>
            </form>
        </div>
    </div>



    <div class="site-footer">
        <div class="container">
            <div class="row justify-content-center copyright">

                <div class="col-lg-7 text-center">

                    <div class="widget">
                        <ul class="social list-unstyled">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-youtube-play"></span></a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This
                            template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
                        </p>

                        <div class="d-block">
                            <a href="#" class="m-2">Terms &amp; Conditions</a>/
                            <a href="#" class="m-2">Privacy Policy</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>


        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/navbar.js') }}"></script>
        <script src="{{ asset('assets/js/counter.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
            integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
            data-cf-beacon='{"rayId":"8cb57696cad581f2","version":"2024.8.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}'
            crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/magdesign/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2024 16:07:27 GMT -->

</html>