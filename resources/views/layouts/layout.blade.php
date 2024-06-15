<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MADA COMPANY</title>
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/aos.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/flaticon.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/icomoon.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/jquery.timepicker.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/open-iconic-bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">

    {{--    --}}
    <link href="{{asset('/css/bootstrap/bootstrap-grid.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap/bootstrap-reboot.css')}}" rel="stylesheet" type="text/css">
    {{--    --}}
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">MADA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{\Request::route()->getName()==='home' ? 'active' : '' }} "><a
                        href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item {{\Request::route()->getName()==='about' ? 'active' : '' }}"><a
                        href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item {{\Request::route()->getName()==='blogs' ? 'active' : '' }}"><a
                        href="{{route('blogs')}}" class="nav-link">Blog</a></li>
                <li class="nav-item {{\Request::route()->getName()==='contacts' ? 'active' : '' }}"><a
                        href="{{route('contacts')}}" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="{{route('contacts')}}" class="nav-link"><span>Get started</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 bg-primary p-4">
                    <h2 class="ftco-heading-2">MADA</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled mb-0">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Navigational</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Home</a></li>
                        <li><a href="#" class="py-2 d-block">Domain</a></li>
                        <li><a href="#" class="py-2 d-block">Hosting</a></li>
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Blog</a></li>
                        <li><a href="#" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Office</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">204 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | MADA COMPANY
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
