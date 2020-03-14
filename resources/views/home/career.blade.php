@extends('home.layouts.app')

@section('title','Careers')
@section('content')
    <!--contact-starts-->
    <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Contact</h2>
                    <div class="breadcrumbs">
                    <a href="{{ url('/') }}">Home</a><i>|</i><span>Careers</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonSection pdb90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-6 col-lg-12 pdl45">
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
    <!--address-end-->
@endsection

