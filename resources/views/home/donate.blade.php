@extends('home.layouts.app')

@section('title','Donate')
@section('content')

    <!--about-starts-->
    <div class="about">
        <div class="container">
            <div class="about-top heading">
                <h2>Donate</h2>
            </div>
            <div class="about-bottom">
                <div class="col-md-5 about-left">
                    <img src="{{ asset('assets/images/abt1.jpg') }}" alt="" />
                </div>
                <div class="col-md-7 about-right">
                    <h4>Donate us we help to others.</h4>
                    <p>

                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--about-end-->
    <!--why-starts-->
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
@endsection
