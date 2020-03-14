@extends('Home/layouts/app')

@section('title','Section')

@section('content')

<section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Our Service</h2>
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i>|</i><span>Services</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonSection pdb80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 sidebar_1">
                        <aside class="widget">
                            <h3 class="widget_title">Our Services</h3>
                            <ul>
                                @foreach ($services as $service )
                                <li><a href="{{ route('service.details', $service->title_slug) }}">
                                    <i class="fal {{ $service->font_code }}"></i> {{ $service->title }} </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget">
                            <h3 class="widget_title">Our Brochures</h3>
                            <div class="allBrouchers">
                                <div class="singleBrou">
                                    <i class="fal fa-file-pdf"></i>
                                    <h3><a href="#" target="_blank">Company Profile <span>(1.5mb)</span></a></h3>
                                    <a href="#" target="_blank">Download</a>
                                </div>
                                <div class="singleBrou">
                                    <i class="fal fa-file-pdf"></i>
                                    <h3><a href="#" target="_blank">Product Profile <span>(1.5mb)</span></a></h3>
                                    <a href="#" target="_blank">Download</a>
                                </div>
                                <div class="singleBrou">
                                    <i class="fal fa-file-pdf"></i>
                                    <h3><a href="#" target="_blank">Service Overview <span>(1.5mb)</span></a></h3>
                                    <a href="#" target="_blank">Download</a>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget havqueswidget">
                            <h3 class="widget_title">Have any Questions?</h3>
                            <div class="hqw_content">
                                <p>
                                    Please feel free to contact us. We will
                                    get back to you with 2 business days.
                                    Or just call us now.
                                </p>
                                <h5>Call Us: (+91) 73001 54111</h5>
                                <h5>sales@cadzone-global.com</h5>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            @foreach ($services as $service)
                                <div class="col-lg-6 col-md-6">
                                <div class="singleService style2">
                                    <div class="serviceThumb">
                                    <img src="{{ 'service_images/'.$service->image_1 }}" alt="">
                                    </div>
                                    <div class="serviceDetails">
                                        <h3  style="word-break: break-word;">
                                        <a href="{{ route('service.details', $service->title_slug) }}">{{  $service->title }}</a></h3>
                                        <p style="word-break: break-word;">
                                            {!! Str::words($service->description, 20,'....')  !!}
                                        </p>
                                        <a href="#">Read More<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
