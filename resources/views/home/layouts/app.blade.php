<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themewar.com/html/industing/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 14:46:35 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Welcome To codeZone | @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Include All CSS here-->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('home/css/bootstrap.css') }}"/>
        <link rel="stylesheet" type="text/css" href="/home/css/fontawesome-all.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/line-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/icofont.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/owl.carousel.min.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/owl.theme.default.min.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/preset.css"/>

        <link rel="stylesheet" type="text/css" href="/home/css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/navigation.css"/>

        <link rel="stylesheet" type="text/css" href="/home/css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="/home/css/presets/color1.css" id="colorChange"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="/home/image/png" href="/home/home/images/favicon.png">
        <style>
            .btn-primary-custom {
                color: #fff;
                background-color: #ff5e14;
                border-color: #ff5e14;
                padding: 0px 24px 1px 20px;
                font-weight: 700;
            }
            .btn-outline-primary-custom {
                color: #ffffff;
                border-color: #ff5e14;
                padding: 0px 24px 1px 20px;
            }
        </style>
        @yield('add_css')
    </head>
    <body>
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->

        <!-- Color Preset -->

        <!-- Color Preset -->

        <section class="topbar">
            <div class="header-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-3 noPadding">
                        <div class="logo text-left">
                            <a href="{{ url('/') }}">
                                <img src="/home/images/cadzone.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-9">
                        <div class="topbar_right text-right">
                            <div class="topbar_element info_element">
                                {{-- <i class="fa fa-envelope"></i> --}}
                                <h5>Email Address</h5>
                                <p><a href="mailto:sales@cadzone-global.comm">sales@cadzone-global.com</a></p>
                            </div>
                            <div class="topbar_element info_element">
                                <i class="fa fa-phone"></i>
                                <h5>Phone Number</h5>
                                <p>(+91) 73001 54111</p>
                            </div>
                            <div class="topbar_element search_element">
                                <a href="/login" class="btn btn btn-primary-custom btn-sm" role="button" aria-pressed="true">LOGIN</a>
                            </div>
                            {{-- <div class="topbar_element settings_bar">
                                <a href="#" class="hamburger" id="open-overlay-nav"><i class="fal fa-bars"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('home.layouts.navbar')

        <!-- Overlay Menu -->
        @include('home.layouts.popup')
        <!-- /Overlay Menu -->
        @yield('content')
        <!-- Footer -->
        @include('home.layouts.footer')

        <!-- Footer End -->
        <section class="copyright_section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="siteinfo">
                            Copyright By &COPY;<a href="/"> CadZone</a> - {{ date('Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" id="backtotop"><i class="fal fa-angle-double-up"></i></a>
        <!-- Include All JS -->
        <script src="/home/js/jquery.js"></script>
        <script src="/home/js/jquery-ui.js"></script>
        <script src="/home/js/bootstrap.min.js"></script>
        <script src="/home/js/jquery.appear.js"></script>
        <script src="/home/js/owl.carousel.min.js"></script>
        <script src="/home/js/slick.min.js"></script>
        <script src="/home/js/jquery.shuffle.min.js"></script>
        <script src="/home/js/jquery.magnific-popup.min.js"></script>

        <script src="/home/js/modernizr.custom.js"></script>
        <script src="/home/js/dlmenu.js"></script>
        <script src="/home/js/jquery.easing.1.3.js"></script>

        <script src="/home/js/jquery.themepunch.tools.min.js"></script>
        <script src="/home/js/jquery.themepunch.revolution.min.js"></script>

        <script src="/home/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="/home/js/extensions/revolution.extension.video.min.js"></script>

        <script src="/home/js/theme.js"></script>
        <!-- Include All JS -->
    </body>

<!-- Mirrored from themewar.com/html/industing/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 14:48:41 GMT -->
</html>
