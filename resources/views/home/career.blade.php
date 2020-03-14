@extends('home.layouts.app')

@section('title','About')
@section('content')

    <div class="about">
        <div class="container">
            <div class="about-top heading">
                <h2>Career</h2>
            </div>
            <div class="about-bottom">
                <div class="row">
                    <div class="col-md-2 about-left">
                        <img src="{{ asset('assets/images/careeer.png') }}" alt="Become Our Mamber"/>
                    </div>
                    <div class="col-md-10 about-right">
                        <h4>We have Vacancy in many fields join us.</h4>
                    </div>
                </div>

                <div class="row" style="margin-top: 10px; align: center">
                    <div class="col-sm-8 col-md-8 col-md-offset-2">
                        <img src="{{ asset('assets/images/application.jpeg') }}" alt="" class="img-responsive">
                    </div>
                    {{--<div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                                <div class="caption">
                                    <h3>Jobs Title</h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                        porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                                        elit.
                                    </p>
                                    <p>
                                        <a href="#" class="btn btn-primary" role="button">Apply</a>
                                        <a href="#" class="btn btn-default" role="button">Send Mail</a>
                                    </p>
                                </div>
                        </div>
                    </div>--}}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
