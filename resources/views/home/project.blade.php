@extends('Home/layouts/app')

@section('title','Projects')

@section('content')
        <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>Project</h2>
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i>|</i><span>Projects</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="commonSection projectPage">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="filterMenu emptyStyle">
                            <ul class="text-center clearfix shafful_filter">
                                <li class="active" data-group="all"><i class="far fa-bars"></i>All Cases</li>
                                <li data-group="oil_gas"><i class="fal fa-fire-smoke"></i>Oil & Gas</li>
                                <li data-group="construction"><i class="far fa-fist-raised"></i>Construction</li>
                                <li data-group="chemicel"><i class="fal fa-sun-dust"></i>Chemicel</li>
                                <li data-group="housing"><i class="fal fa-home"></i>Housing</li>
                                <li data-group="garden"><i class="fal fa-leaf"></i>Garden</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row" id="shafulls">
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "construction", "housing"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/30.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/30.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "chemicel", "garden"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/31.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/31.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "oil_gas", "construction"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/32.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/32.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "housing", "garden"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/33.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/33.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "oil_gas", "construction"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/34.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/34.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "chemicel", "housing"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/35.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/35.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "construction", "housing"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/36.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/36.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "chemicel", "garden"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/37.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/37.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-4 shaf_itme" data-groups='["all", "oil_gas", "construction"]'>
                                <div class="singleFolio_04 text-center">
                                    <div class="sf4_img">
                                        <img src="images/works/38.jpg" alt="">
                                        <div class="sf4_hov">
                                            <a href="images/works/38.jpg" class="prePhoto2"><i class="fal fa-search-plus"></i></a>
                                            <a href="project_details_1.html" class="detailsLink2"><i class="fal fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="sf4_det">
                                        <h3><a href="project_details_1.html">Mantabo Ball Industry</a></h3>
                                        <p class="sf4_cat"><a href="#">Construction</a><span>/</span><a href="#">Housing</a></p>
                                        <div class="sf4_con">
                                            At vero eos et accusam sto duo dolores et ead retet clita kasd.
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt25">
                    <div class="col-lg-12">
                        <div class="ind_pagination text-center">
                            <a href="#"><i class="far fa-arrow-left"></i></a>
                            <a href="#">01</a>
                            <span class="current">02</span>
                            <span>...</span>
                            <a href="#">04</a>
                            <a href="#"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
