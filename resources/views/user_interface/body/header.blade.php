<header class="header-nav nav-homepage-style stricky main-menu">
    <nav class="posr">
        <div class="container posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <!-- Logo -->
                <div class="col-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logos me-4">
                            <a class="header-logo" href="{{ route('home') }}">
                                <img src="{{ asset('frontend/assets/images/m.png') }}" alt="Logo Light">
                            </a>
                            <a class="header-logo d-none" href="{{ route('home') }}">
                                <img src="{{ asset('frontend/assets/images/k.png') }}" alt="Logo Dark">
                            </a>
                        </div>

                        <!-- Navigation Menu -->
                        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                            <!-- Services -->
                            <li class="visible_list">
                                <a class="list-item" href="#"><span class="title">Services</span></a>
                                <ul class="dropdown">
                                    <li><a href="#">Integrated Facilities Management</a></li>
                                    <li><a href="#">Property Management Services</a></li>
                                    <li><a href="#">Maintenance Management Services</a></li>
                                    <li><a href="#">Estate Agency/Brokerage Services</a></li>
                                    <li><a href="#">Asset Management Services</a></li>
                                    <li><a href="#">Property Development Services</a></li>
                                    <li><a href="#">Land Administration</a></li>
                                </ul>
                            </li>

                            <!-- Research -->
                            <li class="visible_list">
                                <a class="list-item" href="#"><span class="title">Research</span></a>
                                <ul class="dropdown">
                                    <li><a href="#">Market Insights</a></li>
                                    <li><a href="#">Trends & Reports</a></li>
                                    <li><a href="#">White Papers</a></li>
                                    <li><a href="#">Data Tools</a></li>
                                </ul>
                            </li>

                            <!-- Properties -->
                            <li class="visible_list">
                                <a class="list-item" href="#"><span class="title">Properties</span></a>
                                <ul class="dropdown">
                                    <li><a href="#">Property List V1</a></li>
                                    <li><a href="#">Property List V2</a></li>
                                    <li><a href="#">Property Grid View</a></li>
                                    <li><a href="#">Single Property</a></li>
                                </ul>
                            </li>

                            <!-- Others -->
                            <li class="visible_list"><a class="list-item" href="#"><span class="title">Experts</span></a></li>
                            <li class="visible_list"><a class="list-item" href="#"><span class="title">Our Offices</span></a></li>

                            <!-- Careers -->
                            <li class="visible_list">
                                <a class="list-item" href="#"><span class="title">Careers</span></a>
                                <ul class="dropdown">
                                    <li><a href="#">Open Roles</a></li>
                                    <li><a href="#">Internships</a></li>
                                    <li><a href="#">Submit Resume</a></li>
                                </ul>
                            </li>

                            <!-- About -->
                            <li class="visible_list"><a class="list-item" href="#"><span class="title">About Us</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Right-side Icons (optional) -->
                <div class="col-auto d-none d-xl-flex align-items-center">
                    <a class="ud-btn add-property menu-btn bdrs60 me-4" href="#">Add Property</a>
                    {{-- <a class="sidemenu-btn filter-btn-right" href="#">
                        <img class="img-1" src="{{ asset('frontend/assets/images/icon/nav-icon-white.svg') }}" alt="">
                        <img class="img-2 d-none" src="{{ asset('frontend/assets/images/icon/nav-icon-dark.svg') }}" alt="">
                    </a> --}}
                </div>
            </div>
        </div>
    </nav>

    <!-- Responsive Dropdown Styling -->
   <style>
    #respMenu ul {
        white-space: nowrap;
    }

    #respMenu ul li {
        position: relative;
    }

    #respMenu ul li ul.dropdown {
        display: none;
        position: absolute;
        background-color: #fff;
        z-index: 999;
        min-width: 200px;
        padding: 8px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
    }

    #respMenu ul li:hover > ul.dropdown {
        display: block;
    }

    #respMenu ul li ul li {
        padding: 5px 10px;
        white-space: normal;
    }

    #respMenu ul li ul li a {
        color: #222;
        font-size: 13px; /* Smaller font size */
        text-decoration: none;
        line-height: 1.3;
    }

    #respMenu ul li ul li:hover a {
        color: #007bff;
    }
</style>

</header>
