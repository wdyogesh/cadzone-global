@extends('home.layouts.app')

@section('title','Careers')
@section('content')
    <!--contact-starts-->
    <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Contact</h2>
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i>|</i><span>Contact Us</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="commonSection pdb90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-5">
                        <div class="icon_box_05 ib5_left">
                            <i class="fal fa-map-marker-alt"></i>
                            <div class="ib5_inner">
                                <h3>Office Location</h3>
                                <p>
                                Reg. Off : H-9, Purvanchal, Phase-1, Awadhpuri,<br/> Bhopal, Madhya Pradesh, India, Pin-462022
                                </p>

                            </div>
                        </div>
                        <div class="icon_box_05 ib5_left">
                            <i class="fal fa-clock"></i>
                            <div class="ib5_inner">
                                <h3>Office Hours</h3>
                                <p>
                                    Mon - Fri: 09:00am to 07.00pm <span>Sat - Sun: Off Day</span>
                                </p>

                            </div>
                        </div>
                        <div class="icon_box_05 ib5_left">
                            <i class="fal fa-headset"></i>
                            <div class="ib5_inner">
                                <h3>Quick Contact</h3>
                                <p>
                                (+91) 73001 54111 <br/>sales@cadzone-global.com
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-6 col-lg-7 pdl45">
                        <div class="row">
                            <div class="col-xl-12 text-left">
                                <h6 class="sub_title dark_sub_title ">Get In Touch</h6>
                                <h2 class="sec_title mb45">
                                    <span>Contact Form</span>
                                </h2>
                            </div>
                        </div>
                        <div class="cotactForm light_form">
                            @if(session('message'))
                                <span style="color: green;">{{ session('message') }}</span>
                            @endif
                            <form method="post" action="{{ route('contact') }}" class="row">
                                 @csrf()
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input  value="{{old('name')}}"
                                           type="text" name="name"
                                           class="required" type="text"
                                           name="name" id="name" placeholder="ENTER YOUR NAME HERE" />
                                           <span class="error text-danger pull-left"> {{ $errors->first('name') }} </span>
                                           <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input value="{{old('phone')}}"
                                        class="required" type="text" name="phone" id="phone" placeholder="ENTER YOUR NUMBER HERE" />
                                        <span class="error text-danger pull-left"> {{ $errors->first('phone') }} </span>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input value="{{old('email')}}"
                                        class="required" type="text"
                                        name="email"
                                        id="email" placeholder="ENTER YOUR EMAIL HERE" />
                                        <span class="error text-danger pull-left"> {{ $errors->first('email') }} </span>
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="iconInput">
                                        <input value="{{old('subject')}}"
                                        class="required" type="text" name="subject" id="subject" placeholder="ENTER YOUR SUBJECT HERE" />
                                        <i class="fal fa-edit"></i>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="iconInput">
                                        <textarea class="required" name="message" id="message" placeholder="ENTER YOUR MESSAGE HERE">{{old('message')}}</textarea>
                                        <span class="error text-danger pull-left"> {{ $errors->first('message') }} </span>
                                        <i class="fal fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <input type="submit" value="Send Message"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="googleMapSection noMarginTop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 noPadding">
                        <div class="gmap">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=new%20yourk&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--address-end-->
@endsection

