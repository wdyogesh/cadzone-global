@extends('home.layouts.app')

@section('title','Gallery')
@section('content')
    <!--gallery-starts-->
    <div class="gallery">
        <div class="container">
            <div class="gallery-top heading">
                <h3>Gallery</h3>
            </div>
            <div class="gallery-bottom grid">
                <div class="g-1">
                    <div class="col-md-3 g-left">
                        <a href="{{ asset('assets/images/g1.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g1.jpg') }}" alt=""/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3 g-left">
                        <a href="{{ asset('assets/images/g2.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g2.jpg') }}" alt=""/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 g-right">
                        <a href="{{ asset('assets/images/g-3.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g3.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="g-2">
                    <div class="col-md-6 g-right">
                        <a href="{{ asset('assets/images/g-4.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g4.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3 g-left">
                        <a href="{{ asset('assets/images/g5.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g5.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3 g-left">
                        <a href="{{ asset('assets/images/g6.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g6.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="g-2">
                    <div class="col-md-3 g-left">
                        <a href="{{ asset('assets/images/g7.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g7.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-3 g-left">
                        <a href="{{ asset('assets/images/g1.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g1.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-6 g-right">
                        <a href="{{ asset('assets/images/g-9.jpg') }}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                            <figure class="effect-oscar">
                                <img src="{{ asset('assets/images/g9.jpg') }}" alt="img09"/>
                                <figcaption>
                                    <h2>Sed id dolor</h2>
                                    <p>Vestibulum mollis mollis elit nec ullamcorper</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--gallery-end-->
    <!--address-starts-->
    <div class="address">
        <div class="container">
            <div class="address-top">
                <div class="col-md-4 add-left">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    <p> Sanyukta Apartment, Block-C,
                        Room No.201, Kankarbagh,
                        Main Road, Patna - 20
                    </p>
                </div>
                <div class="col-md-4 add-left">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    <p>+91-9472463215, <br> +91-6206235493 ,
                        <br>+91-9801185412, <br> +91-6203393134</p>
                </div>
                <div class="col-md-4 add-left">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <p><a href="mailto: sambodhiwelfaredevelopmentorga@gmail.com">sambodhiwelfaredevelopmentorga @gmail.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--address-end-->

@endsection

@section('script_add')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--start-smoth-scrolling-->
    <script type="text/javascript" src="{{ asset('assets/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
    <!--script-->
    <script src="{{ asset('assets/js/modernizr.custom.97074.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.chocolat.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">
    <!--light-box-files -->
    <script type="text/javascript">
        $(function() {
            $('.gallery-bottom a').Chocolat();
        });
    </script>
@stop
