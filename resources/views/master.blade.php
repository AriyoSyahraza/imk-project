<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revolve - Personal Magazine blog Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href= "{{ asset('/images/favicon.ico') }}"  type="image/x-icon">
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Themify -->
    <link rel="stylesheet" href="    {{ asset('/plugins/themify/css/themify-icons.css') }}    ">
    <link rel="stylesheet" href="    {{ asset('plugins/slick-carousel/slick-theme.css') }}    ">
    <link rel="stylesheet" href="    {{ asset('/plugins/slick-carousel/slick.css') }}    ">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="    {{ asset('plugins/owl-carousel/owl.carousel.min.css') }}    ">
    <link rel="stylesheet" href="    {{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}    ">
    <link rel="stylesheet" href="    {{ asset('plugins/magnific-popup/magnific-popup.css') }}    ">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="    {{ asset('/css/style.css') }}    ">
</head>

<body>
    <div class="header-logo py-5 d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <a class="navbar-brand" href="/"><img src="images/logo.png" alt=""
                            class="img-fluid w-100"></a>
                </div>
            </div>
        </div>
    </div>

    <header class="header-top bg-grey justify-content-center">
        <nav class="navbar navbar-expand-lg navigation">
            <div class="container">
                <a class="navbar-brand d-lg-none" href="/"><img src="images/logo.png" alt=""
                        class="img-fluid"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul id="menu" class="menu navbar-nav ">

                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/Blog-Post" class="nav-link">Blog Post</a></li>

                        <li class="nav-item"><a href="/About" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="/Fashion" class="nav-link">Category</a></li>

                        <li class="nav-item"><a href="/Post" class="nav-link">Post Gallery Format</a></li>

                        <li class="nav-item"><a href="/Contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="/Login" class="nav-link">Login</a></li>

                        <li class="nav-item d-lg-none">
                            <div class="search_toggle p-3 d-inline-block bg-white"><i class="ti-search"></i></div>
                        </li>
                    </ul>
                </div>

                <div class="text-right search d-none d-lg-block">
                    <div class="search_toggle"><i class="ti-search"></i></div>
                </div>
            </div>
        </nav>

    </header>
    <!--search overlay start-->
    <div class="search-wrap">
        <div class="overlay">
            <form action="#" class="search-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-9">
                            <input type="text" class="form-control" placeholder="Search..." />
                        </div>
                        <div class="col-md-2 col-3 text-right">
                            <div class="search_toggle toggle-wrap d-inline-block">
                                <i class="ti-close"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--search overlay end-->


    @yield('content')

     <!-- THEME JAVASCRIPT FILES============= -->
    <!-- initialize jQuery Library -->
    <script src="    {{ asset('/plugins/jquery/jquery.js') }}
    "></script>
    <!-- Bootstrap jQuery -->
    <script src="    {{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}
    "></script>
    <script src="    {{ asset('/plugins/bootstrap/js/popper.min.js') }}
    "></script>
    <!-- Owl caeousel -->
    <script src="    {{ asset('/plugins/owl-carousel/owl.carousel.min.js') }}
    "></script>
    <script src="    {{ asset('/plugins/slick-carousel/slick.min.js') }}
    "></script>
    <script src="    {{ asset('/plugins/magnific-popup/magnific-popup.js') }}
    "></script>
    <!-- Instagram Feed Js -->
    <script src="    {{ asset('plugins/instafeed-js/instafeed.min.js') }}
    "></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="    {{ asset('/plugins/google-map/gmap.js') }}
    "></script>
    <!-- main js -->
    <script src="    {{ asset('js/custom.js') }}
    "></script>
</body>

</html>