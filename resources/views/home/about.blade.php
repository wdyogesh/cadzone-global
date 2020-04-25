@extends('home.layouts.app')

@section('title','About')
@section('content')
<section class="page_banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2>About Us</h2>
                        <div class="breadcrumbs">
                            <a href="/">Home</a><i>|</i><span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonSection aboutSection">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="aboutImg clearfix">
                            <div class="i1 pull-right">
                                <img src="{{ asset('/home/images/about/2.jpg') }}" alt=""/>
                            </div>
                            <div class="i2 pull-left">
                                <img src="{{ asset('/home/images/about/3.jpg') }}" class="si" alt=""/>
                            </div>
                            <div class="yearsofexp">
                                <h2><span data-counter="20" class="timer">20</span>+</h2>
                                <span>Year of Experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 noPaddingRight">
                        <div class="aboutDescs">
                            <h5 class="sub_title">About Cadzone</h5>

                            <p class="ind_lead">Established in 2001 Around 75+, Employees
                                 09+, International ClientsLocated in Bhopal, India.
                            </p>
                            <p>
                            CADZONE is a global leading service provider of engineering
                            solutions for advanced technology products in the hydro generator,
                             hydro turbine, gas turbine, steam turbine, heat exchanger, traction
                             motor, transformer, switchgear, control panel, all types of lifting
                             equipment, shop/site erection devices, piping, wiring, instrumentation
                             and auxiliary plants.
                             we also undertake all types of Renovation, Modernization &
                              Up-gradation (RMU) projects in the above mentioned domains.
                              we have a specialized team for hydro generator engineering.
                            </p>
                            <p>
                             CADZONE is pioneer in developing a cost effective engineered
                             products and solutions, which we achieve by leveraging our
                              technology strengths, global resources and robust processes.
                              employed 75 plus engineers to support clients in engineering,
                               project procurement support, quality and manufacturing.
                              we also assist in bridging the gap between quality and cost
                              by effectively utilizing resources.
                            </p>
                            <p>
                              CADZONE was established in 2001 in Bhopal, India. The company
                              currently has office in Bhopal and Bangalore. Keeping in mind
                              the needs of current and future customers, CADZONE plans to
                               continuously expands its services.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="skillSections">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="skillHolders">
                            <h6 class="sub_title">Our Skills</h6>
                            <h2 class="sec_title">How We Make <br/>Your Future.</h2>

                            <div class="singleSkill" data-parcent="80">
                                <span>Architecture Design</span>
                                <div class="skillBG">
                                    <div class="skill"><span class="prc">80%</span></div>
                                </div>
                            </div>
                            <div class="singleSkill" data-parcent="91">
                                <span>Industrial Design</span>
                                <div class="skillBG">
                                    <div class="skill"><span class="prc">91%</span></div>
                                </div>
                            </div>
                            <div class="singleSkill" data-parcent="60">
                                <span>EPC Works</span>
                                <div class="skillBG">
                                    <div class="skill"><span class="prc">60%</span></div>
                                </div>
                            </div>
                            <div class="singleSkill" data-parcent="70">
                                <span>Utilizaion Rate</span>
                                <div class="skillBG">
                                    <div class="skill"><span class="prc">70%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 noPadding">
                        <div class="stretchBGDiv"></div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h6 class="sub_title gray_sub_title">Team</h6>
                        <h2 class="sec_title with_bar">Our Members</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Section: Team v.1 -->
                    <section class="team-section text-center my-5">
                    <!-- Grid row -->
                    <div class="row">
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                    <img src="/home/images/team/cadteam/9.jpg" class="rounded-circle z-depth-1"
                        alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Jugal Kishore Bhatti</h5>
                    {{-- <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p> --}}
                    <p class="grey-text">Ex-senior management professional from BHEL, result-oriented & dynamic Electrical engineer from hydro power
                        sector with excellence in Electrical design of Hydro generator and Motor from “Concept to commissioning” having total experience
                        of over 37 years in power sector with proven track record.</p>
                    <ul class="list-unstyled mb-0"></ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                    <img src="/home/images/team/cadteam/10.jpg" class="rounded-circle z-depth-1"
                        alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Bhupesh Samantray</h5>
                    {{-- <p class="text-uppercase blue-text"><strong>Web developer</strong></p> --}}
                    <p class="grey-text">30+ years experienced senior management engineering professional with core proficiency in engineering,
                        design, project procurement, sourcing, and supplier quality especially in hydro power and manufacturing sector. Expertise in design,
                        engineering and execution of hydro RMU projects.</p>
                    <ul class="list-unstyled mb-0"> </ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
                    <div class="avatar mx-auto">
                    <img src="/home/images/team/cadteam/11.jpg" class="rounded-circle z-depth-1"
                        alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Irshad Ansari</h5>
                    {{-- <p class="text-uppercase blue-text"><strong>Photographer</strong></p> --}}
                    <p class="grey-text">17+ years of experience in basic layouts and detail engineering in hydro generators.
                        Specialist in 3D modelling, 2D drawings, BOMs preparation, generator and turbine components, piping, auxiliary plants,
                        lifting tools, covers, devices, instrumentation, wiring, cubicles and drawings verification.</p>
                    <ul class="list-unstyled mb-0"></ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6">
                    <div class="avatar mx-auto">
                    <img src="/home/images/team/cadteam/12.jpg" class="rounded-circle z-depth-1"
                        alt="Sample avatar">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Abhishek Nath Tiwari</h5>
                    {{-- <p class="text-uppercase blue-text"><strong>Backend developer</strong></p> --}}
                    <p class="grey-text">10+ years of experience in design using 2D & 3D Modelling softwares i.e.
                        Autodesk Inventer, Solidworks, ProE, Catia, NX Cad & AutoCad.</p>
                    <ul class="list-unstyled mb-0"></ul>
                    </div>
                    <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    </section>
                    <!-- Section: Team v.1 -->
                </div>
            </div>
        </section>
@endsection
