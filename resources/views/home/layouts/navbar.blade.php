<section class="nav_bar" id="fix_nav">
            <div class="header-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="mobileMenuBar">
                            <a href="javascript: void(0);"><span>Menu</span><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="mainmenu">
                            <ul>
                                <li class="{{ Request::is('/') ? 'current-menu-item' : '' }}">
                                    <a href="/">Home</a>
                                </li>
                            <li class="{{ Request::is('about-us') ? 'current-menu-item' : '' }}">
                                <a href="{{ url('about-us') }}">About</a>
                            </li>
                                <li class="{{ Request::is('our-services') ? 'current-menu-item' : '' }} menu-item-has-children">
                                <a href="{{ url('/our-services') }}">Services</a>
                                    {{-- <ul class="sub_menu">
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">Service Pages</a>
                                            <ul class="sub_menu">
                                                <li><a href="service_1.html">Service 01</a></li>
                                                <li><a href="service_2.html">Service 02</a></li>
                                                <li><a href="service_3.html">Service 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service_details.html">Service Details</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class=" menu-item-has-children">
                                    <a href="javascript:void(0);">Projects</a>
                                    <ul class="sub_menu">
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">Project Lists</a>
                                            <ul class="sub_menu">
                                                <li><a href="project_1.html">Project 01</a></li>
                                                <li><a href="project_2.html">Project 02</a></li>
                                                <li><a href="project_3.html">Project 03</a></li>
                                                <li><a href="project_4.html">Project 04</a></li>
                                            </ul>
                                        </li>
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">Project Details</a>
                                            <ul class="sub_menu">
                                                <li><a href="project_details_1.html">Details 01</a></li>
                                                <li><a href="project_details_2.html">Details 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li class="{{ Request::is('news') ? 'current-menu-item' : '' }} menu-item-has-children">
                                <a href="{{ url('/news') }}">News</a>
                                    {{-- <ul class="sub_menu">
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">News Lists</a>
                                            <ul class="sub_menu">
                                                <li><a href="news_list_1.html">News List 01</a></li>
                                                <li><a href="news_list_2.html">News List 02</a></li>
                                            </ul>
                                        </li>
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">News Details</a>
                                            <ul class="sub_menu">
                                                <li><a href="news_details_1.html">Details 01</a></li>
                                                <li><a href="news_details_2.html">Details 02</a></li>
                                                <li><a href="news_details_3.html">Details 03</a></li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                {{-- <li class=" menu-item-has-children">
                                    <a href="javascript:void(0);">Shop</a>
                                    <ul class="sub_menu">
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">Shop Pages</a>
                                            <ul class="sub_menu">
                                                <li><a href="shop_1.html">Shop 01</a></li>
                                                <li><a href="shop_2.html">Shop 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop_details.html">Product Details</a></li>
                                        <li class=" menu-item-has-children">
                                            <a href="javascript:void(0);">Other Pages</a>
                                            <ul class="sub_menu">
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> --}}
                                 <li class="{{ Request::is('career') ? 'current-menu-item' : '' }} menu-item-has-children">
                                    <a href="/career">Career</a>
                                </li>
                                <li class="{{ Request::is('contact-us') ? 'current-menu-item' : '' }} menu-item-has-children">
                                    <a href="/contact-us">Contact</a>
                                </li>
                                {{-- <li class=" menu-item-has-children">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul class="sub_menu">
                                        <li><a href="team.html">Team Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <div class="top_social text-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="right_bgs"></span>
        </section>
