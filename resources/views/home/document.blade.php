@extends('Home/layouts/app')

@section('title','About')
@section('content')
    <div class="about">
        <div class="container">
            <div class="about-top heading">
                <h2>Document</h2>
                <p>Page is coming soon...</p>
            </div>
           {{-- <div class="about-bottom">
                <div class="col-md-5 about-left">
                    <img src="{{ asset('assets/images/abt1.jpg') }}" alt="" />
                </div>
                <div class="col-md-7 about-right">
                    <h4>Here is the Sambodhi Welfare & Development Foundation documents.</h4>
                    <p>Vivamus venenatis Nam sollicitudin massa commodo hendrerit auctor. In hac habitasse platea dictumst. Sed id dolor vehicula.quam a urna ornare, nec sagittis sem consectetur. Vestibulum mollis mollis elit nec ullamcorper. Aenean erat elit, consectetur sed ipsum eu, faucibus posuere massa.</p>
                    <p>Nullam non neque neque. Sed sit amet sagittis purus. Nullam eget accumsan nibh. Suspendisse et sapien luctus, facilisis magna ut, placerat nisi. Ut fringilla lacus quis justo luctus tincidunt.</p>
                </div>
                <div class="clearfix"> </div>
            </div>--}}
        </div>
    </div>
    <!--about-end-->
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
