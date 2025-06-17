<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/homez-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 15:26:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Homez - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ud-custom-spacing.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- Title -->
    <title>Homez - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <div class="wrapper ovh">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        @include('user_interface.body.header')
        <!-- Signup Modal -->
        <div class="signup-modal">
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Realton</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Menu In Hiddn SideBar -->

       <!-- realtor was here -- >

        <!--End Menu In Hiddn SideBar -->
        <!-- Advance Feature Modal Start -->
        <div class="advance-feature-modal">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header pl30 pr30">
                            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>


                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Price Range</h6>
                                        <!-- Range Slider Mobile Version -->
                                        <div class="range-slider-style modal-version">
                                            <div class="range-wrapper">
                                                <div class="mb30 mt35" id="slider"></div>
                                                <div class="d-flex align-items-center">
                                                    <span id="slider-range-value1"></span><i
                                                        class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                                    <span id="slider-range-value2"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Type</h6>
                                        <div class="form-style2 input-group">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option>Property</option>
                                                <option data-tokens="Apartments">Apartments</option>
                                                <option data-tokens="Bungalow">Bungalow</option>
                                                <option data-tokens="Houses">Houses</option>
                                                <option data-tokens="Loft">Loft</option>
                                                <option data-tokens="Office">Office</option>
                                                <option data-tokens="Townhome">Townhome</option>
                                                <option data-tokens="Villa">Villa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Property ID</h6>
                                        <div class="form-style2">
                                            <input type="text" class="form-control" placeholder="RT04949213">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Bedrooms</h6>
                                        <div class="d-flex">
                                            <div class="selection">
                                                <input id="xany" name="xbeds" type="radio" checked>
                                                <label for="xany">any</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xoneplus" name="xbeds" type="radio">
                                                <label for="xoneplus">1+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xtwoplus" name="xbeds" type="radio">
                                                <label for="xtwoplus">2+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xthreeplus" name="xbeds" type="radio">
                                                <label for="xthreeplus">3+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xfourplus" name="xbeds" type="radio">
                                                <label for="xfourplus">4+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xfiveplus" name="xbeds" type="radio">
                                                <label for="xfiveplus">5+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Bathrooms</h6>
                                        <div class="d-flex">
                                            <div class="selection">
                                                <input id="yany" name="ybath" type="radio" checked>
                                                <label for="yany">any</label>
                                            </div>
                                            <div class="selection">
                                                <input id="yoneplus" name="ybath" type="radio">
                                                <label for="yoneplus">1+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="ytwoplus" name="ybath" type="radio">
                                                <label for="ytwoplus">2+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="ythreeplus" name="ybath" type="radio">
                                                <label for="ythreeplus">3+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="yfourplus" name="ybath" type="radio">
                                                <label for="yfourplus">4+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="yfiveplus" name="ybath" type="radio">
                                                <label for="yfiveplus">5+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Location</h6>
                                        <div class="form-style2 input-group">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option>All Cities</option>
                                                <option data-tokens="California">California</option>
                                                <option data-tokens="Chicago">Chicago</option>
                                                <option data-tokens="LosAngeles">Los Angeles</option>
                                                <option data-tokens="Manhattan">Manhattan</option>
                                                <option data-tokens="NewJersey">New Jersey</option>
                                                <option data-tokens="NewYork">New York</option>
                                                <option data-tokens="SanDiego">San Diego</option>
                                                <option data-tokens="SanFrancisco">San Francisco</option>
                                                <option data-tokens="Texas">Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Square Feet</h6>
                                        <div class="space-area">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-style1">
                                                    <input type="text" class="form-control" placeholder="Min.">
                                                </div>
                                                <span class="dark-color">-</span>
                                                <div class="form-style1">
                                                    <input type="text" class="form-control" placeholder="Max">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget-wrapper mb0">
                                        <h6 class="list-title mb10">Amenities</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-wrapper mb20">
                                        <div class="checkbox-style1">
                                            <label class="custom_checkbox">Attic
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Basketball court
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Air Conditioning
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Lawn
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-wrapper mb20">
                                        <div class="checkbox-style1">
                                            <label class="custom_checkbox">TV Cable
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Dryer
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Outdoor Shower
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Washer
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-wrapper mb20">
                                        <div class="checkbox-style1">
                                            <label class="custom_checkbox">Lake view
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Wine cellar
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Front yard
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Refrigerator
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset
                                    all filters</u></a>
                            <div class="btn-area">
                                <button class="ud-btn btn-thm"><span
                                        class="flaticon-search align-text-top pr10"></span>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advance Feature Modal End -->

        <div class="hiddenbar-body-ovelay"></div>

        <!-- Mobile Nav  -->
        <div id="page" class="mobilie_header_nav stylehome1">
            <div class="mobile-menu">
                <div class="header innerpage-style">
                    <div class="menu_and_widgets">
                        <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg"
                                    alt=""></a>
                            <a class="mobile_logo" href="#"><img src="images/header-logo2.svg"
                                    alt=""></a>
                            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index.html">Home V1</a></li>
                            <li><a href="index2.html">Home V2</a></li>
                            <li><a href="index3.html">Home V3</a></li>
                            <li><a href="index4.html">Home V4</a></li>
                            <li><a href="index5.html">Home V5</a></li>
                            <li><a href="index6.html">Home V6</a></li>
                            <li><a href="index7.html">Home V7</a></li>
                            <li><a href="index8.html">Home V8</a></li>
                            <li><a href="index9.html">Home V9</a></li>
                            <li><a href="index10.html">Home V10</a></li>
                        </ul>
                    </li>
                    <li><span>Property Listign</span>
                        <ul>
                            <li><span>Listing Grid</span>
                                <ul>
                                    <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                                    <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                                    <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                                    <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                                    <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                                    <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a></li>
                                    <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a></li>
                                    <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                                    <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
                                </ul>
                            </li>
                            <li><span>List Style</span>
                                <ul>
                                    <li><a href="page-property-list.html">Style V1</a></li>
                                    <li><a href="page-property-list-all.html">All List</a></li>
                                </ul>
                            </li>
                            <li><span>Listing Single</span>
                                <ul>
                                    <li><a href="page-property-single-v1.html">Single V1</a></li>
                                    <li><a href="page-property-single-v2.html">Single V2</a></li>
                                    <li><a href="page-property-single-v3.html">Single V3</a></li>
                                    <li><a href="page-property-single-v4.html">Single V4</a></li>
                                    <li><a href="page-property-single-v5.html">Single V5</a></li>
                                    <li><a href="page-property-single-v6.html">Single V6</a></li>
                                    <li><a href="page-property-single-v7.html">Single V7</a></li>
                                    <li><a href="page-property-single-v8.html">Single V8</a></li>
                                    <li><a href="page-property-single-v9.html">Single V9</a></li>
                                    <li><a href="page-property-single-v10.html">Single V10</a></li>
                                </ul>
                            </li>
                            <li><span>Map Style</span>
                                <ul>
                                    <li><a href="page-property-header-map-style.html">Map Header</a></li>
                                    <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                                    <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                                    <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                                    <li><a href="page-property-half-map-v4.html">Map V4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><span>User Dashboard</span>
                        <ul>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                            <li><a href="page-dashboard-message.html">Message</a></li>
                            <li><a href="page-dashboard-add-property.html">New Property</a></li>
                            <li><a href="page-dashboard-properties.html">My Properties</a></li>
                            <li><a href="page-dashboard-favorites.html">My Favorites</a></li>
                            <li><a href="page-dashboard-savesearch.html">Saved Search</a></li>
                            <li><a href="page-dashboard-review.html">Reviews</a></li>
                            <li><a href="page-dashboard-package.html">My Package</a></li>
                            <li><a href="page-dashboard-profile.html">My Profile</a></li>
                        </ul>
                    </li>
                    <li><span>Blog</span>
                        <ul>
                            <li><a href="page-blog-v1.html">List V1</a></li>
                            <li><a href="page-blog-v2.html">List V2</a></li>
                            <li><a href="page-blog-v3.html">List V3</a></li>
                            <li><a href="page-blog-single.html">Single</a></li>
                        </ul>
                    </li>
                    <li><span>Pages</span>
                        <ul>
                            <li><a href="page-about.html">About</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li><a href="page-compare.html">Compare</a></li>
                            <li><a href="page-pricing.html">Pricing</a></li>
                            <li><a href="page-faq.html">Faq</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-error.html">404</a></li>
                            <li><a href="page-invoice.html">Invoices</a></li>
                            <li><a href="page-ui-element.html">UI Elements</a></li>
                        </ul>
                    </li>
                    <li class="px-3 mobile-menu-btn">
                        <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Submit Property<i
                                class="fal fa-arrow-right-long"></i></a>
                    </li>
                    <!-- Only for Mobile View -->
                </ul>
            </nav>
        </div>

        <div class="body_content_wrapper">
            <!-- Home Banner Style V1 -->
            @yield('index')
            <!-- Our Footer -->
          @include('user_interface.body.footer')
            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
                <!-- Wrapper End -->
                <script src="{{ asset ('frontend/assets/js/jquery-3.6.4.min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/popper.min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/bootstrap-select.min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/jquery.mmenu.all.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/ace-responsive-menu.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/jquery-scrolltofixed-min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/wow.min.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/owl.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/parallax.js') }}"></script>
                <script src="{{ asset ('frontend/assets/js/pricing-slider.js') }}"></script>
                <!-- Custom script for all pages -->
                <script src="{{ asset ('frontend/assets/js/script.js') }}"></script>
                </body>


                </html>
