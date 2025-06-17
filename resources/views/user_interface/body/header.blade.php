<header class="header-nav nav-homepage-style stricky main-menu">
    <!-- Ace Responsive Menu -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <nav class="posr">
        <div class="container posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logos mr40">
                            <a class="header-logo logo1" href="index.html"><img
                                    src="{{ asset('frontend/assets/images/m.png') }}" alt="Header Logo"></a>
                            <a class="header-logo logo2" href="index.html"><img
                                    src="{{ asset('frontend/assets/images/k.png') }}" alt="Header Logo"></a>
                        </div>
                        <!-- Responsive Menu Structure-->
                        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                            <li class="visible_list"> <a class="list-item" href="#"><span
                                        class="title">Services</span></a>

                                        <style>
                                            #respMenu ul {
                                                white-space: nowrap;
                                            }

                                            #respMenu ul li {
                                                position: relative;
                                                list-style: none;
                                            }

                                            #respMenu ul li ul {
                                                display: none;
                                                position: absolute;
                                                white-space: normal; /* Allow text to wrap within the dropdown */
                                                max-height: none; /* Remove max-height to allow full visibility */
                                            }

                                            #respMenu ul li:hover > ul {
                                                display: block;
                                            }

                                            #respMenu ul li ul li {
                                                white-space: normal;
                                                overflow: visible;
                                                margin-bottom: 5px; /* Adjust as needed for spacing between items */
                                            }
                                        </style>






                                <!-- Level Two-->
                                <ul>
                                    <li><a href="index.html">Integrated Facilities Management </a></li>
                                    <li><a href="index2.html">Property Management Services</a></li>
                                    <li><a href="index3.html">Maintenance Management Services</a></li>
                                    <li><a href="index4.html">Estate Agency/Brokerage Services</a></li>
                                    <li><a href="index5.html">Asset Management Services</a></li>
                                    <li><a href="index6.html">Property Development Services</a></li>
                                    <li><a href="index7.html">Land Administration </a></li>
                                </ul>
                            </li>

                            <li class="visible_list"> <a class="list-item" href="#">
                                <span class="title">Research</span></a>
                                <ul>
                                    <li><a href="index.html">Home V1</a></li>
                                    <li><a href="index2.html">Home V2</a></li>
                                    <li><a href="index3.html">Home V3</a></li>
                                    <li><a href="index4.html">Home V4</a></li>
                                </ul>
                            </li>

                            <li class="visible_list">
                                <a class="list-item" href="#">
                                    <span class="title">Properties</span></a>
                                <ul>
                                    <li><a href="page-blog-v1.html">List V1</a></li>
                                    <li><a href="page-blog-v2.html">List V2</a></li>
                                    <li><a href="page-blog-v3.html">List V3</a></li>
                                    <li><a href="page-blog-single.html">Single</a></li>
                                </ul>
                            </li>


                            <li class="visible_list"> <a class="list-item" href="#"><span class="title">Experts</span></a></li>
                            <li class="visible_list"> <a class="list-item" href="#"><span class="title">Our Offices</span></a></li>

                            <li class="visible_list">
                                <a class="list-item" href="#">
                                    <span class="title">Careers</span></a>
                                <ul>
                                    <li><a href="page-blog-v1.html">List V1</a></li>
                                    <li><a href="page-blog-v2.html">List V2</a></li>
                                    <li><a href="page-blog-v3.html">List V3</a></li>
                                    <li><a href="page-blog-single.html">Single</a></li>
                                </ul>


                                <li class="visible_list">
                                    <a class="list-item" href="#">
                                        <span class="title">About Us</span></a>

                                </li>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-auto d-none">
                    <div class="d-flex align-items-center">

                        <a class="ud-btn add-property menu-btn bdrs60 mx-2 mx-xl-4"></a>
                                <a class="sidemenu-btn filter-btn-right" href="#"><img class="img-1"
                                src="{{ asset ('frontend/assets/images/icon/nav-icon-white.svg') }}" alt=""><img class="img-2"
                                src="{{ asset ('frontend/assets/images/icon/nav-icon-dark.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            adjustFontSize();
        });

        function adjustFontSize() {
            var menuItems = $('#respMenu ul li ul li');
            var maxHeight = 80; // Adjust as needed for maximum height of the dropdown

            menuItems.each(function() {
                var fontSize = 16; // Initial font size

                while ($(this).height() > maxHeight && fontSize > 8) {
                    fontSize -= 1;
                    $(this).css('font-size', fontSize + 'px');
                }
            });
        }
    </script>

</header>
