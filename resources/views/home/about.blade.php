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

                            <p class="ind_lead">Established in 2001 Around 75+ Employees
                                 09+ International ClientsLocated in Bhopal, India.
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

        <section class="skillSections">
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
        </section>

        <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <h6 class="sub_title gray_sub_title">Team</h6>
                        <h2 class="sec_title with_bar">Our Members</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="teamslider2 owl-carousel">
                            <div class="singleTeam02">
                                <div class="st2_inner">
                                    <img src="{{ asset('/home/images/team/8.jpg') }}" alt=""/>
                                    <h2><a href="#">Romada D. Williamson</a></h2>
                                    <span>Founder</span>
                                </div>
                            </div>
                            <div class="singleTeam02">
                                <div class="st2_inner">
                                    <img src="{{ asset('/home/images/team/10.jpg') }}" alt=""/>
                                    <h2><a href="#">Avodo D. Code</a></h2>
                                    <span>CTO</span>
                                </div>
                            </div>
                            <div class="singleTeam02">
                                <div class="st2_inner">
                                    <img src="{{ asset('/home/images/team/9.jpg') }}" alt=""/>
                                    <h2><a href="#">Humble Z. Zahin</a></h2>
                                    <span>CEO</span>
                                </div>
                            </div>
                            <div class="singleTeam02">
                                <div class="st2_inner">
                                    <img src="{{ asset('/home/images/team/11.jpg') }}" alt=""/>
                                    <h2><a href="#">Costa D. Roka</a></h2>
                                    <span>Engineer</span>
                                </div>
                            </div>
                            <div class="singleTeam02">
                                <div class="st2_inner">
                                    <img src="{{ asset('/home/images/team/12.jpg') }}" alt=""/>
                                    <h2><a href="#">Masum D. Boka</a></h2>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
