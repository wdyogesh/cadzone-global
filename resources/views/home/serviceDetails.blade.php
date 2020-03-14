 @extends('Home/layouts/app')

@section('title','Section')

@section('content')

 <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Service Details</h2>
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i>|</i><span>Service Details</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="commonSection serviceDetailsSecions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="service_details_area">
                            <h2 class="entry_title">
                                {{ $service->title }}
                            </h2>
                            <div class="sda_gall">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="sda_gl">
                                            <img src="{{'/service_images/'.$service->image_1}}" alt="Servcie Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sda_gl">
                                           <img src="{{ '/service_images/'.$service->image_2 }}" alt="Servcie Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="sda_gl">
                                            <img src="{{ '/service_images/'.$service->image_3 }}" alt="Servcie Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sda_content">
                                <p  style="word-break: break-word;">
                                    {!! $service->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sidebar_1">
                        <aside class="widget">
                            <h3 class="widget_title">Our Services</h3>
                            <ul>
                                 @foreach ($services as $service )
                                    <li><a href="{{ route('service.details', $service->title_slug) }}"><i class="fal {{ $service->font_code }}"></i> {{ $service->title }} </a></li>
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
                        <aside class="widget">
                            <h3 class="widget_title">Latest Works</h3>
                            <div class="allLatestWorks">
                                <div class="ltworks">
                                    <h3><a href="#">Thread Grinding Hydrolic Pand</a></h3>
                                    <p><a href="#">Constructions</a></p>
                                </div>
                                <div class="ltworks">
                                    <h3><a href="#">Thread Grinding Hydrolic Pand</a></h3>
                                    <p><a href="#">Industrials</a></p>
                                </div>
                                <div class="ltworks">
                                    <h3><a href="#">Thread Grinding Hydrolic Pand</a></h3>
                                    <p><a href="#">Hospitals</a></p>
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
                                <h5>Call Us: +(321) 45 678 901 & 902</h5>
                                <h5>Mail: info@webmail.com</h5>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <section class="calltoactions2 overlays">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-md-8">
                        <div class="cta_left_02">
                            <i class="fal fa-phone"></i>
                            <h6>24/7 We Are available</h6>
                            <h2>Make A Call & Get Appointment</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 text-right pdt25">
                        <a href="#" class="ind_btn id_dark2"><span>Get a Quote</span></a>
                    </div>
                </div>
            </div>
        </section>
@endsection
