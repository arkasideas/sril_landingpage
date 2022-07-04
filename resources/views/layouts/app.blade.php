<!doctype html>
<html lang="en">
    <head>

        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="turbolinks-cache-control" content="no-cache">

        <!--====== Title ======-->
        <title>HOME - SRIL</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--====== CAPTCHA ======-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        @livewireStyles
    </head>
    <body>
         <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->    
        
        <!--====== jquery js ======-->
        <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}" ></script>
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

        <!--====== Bootstrap js ======-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>

        <!--====== Slick js ======-->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>

        <!--====== Isotope js ======-->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

        <!--====== Images Loaded js ======-->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>

        <!--====== Magnific Popup js ======-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

        <!--====== Scrolling js ======-->
        <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>

        <!--====== wow js ======-->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>

        <!--====== Main js ======-->
        <script src="{{asset('assets/js/main.js')}}"></script>

        @yield('content')
        @yield('js')
        
        @livewireScripts
    </body>
</html>