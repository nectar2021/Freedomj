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
    @vite(['resources/sass/admin/app.scss', 'resources/js/admin/main.js'])

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
        @include('admin_backend.body.header')
        <!-- Signup Modal -->
        <!-- Menu In Hiddn SideBar -->

       <!-- realtor was here -- >

        <!--End Menu In Hiddn SideBar -->
        <!-- Advance Feature Modal Start -->
        <!-- Advance Feature Modal End -->


        <!-- Mobile Nav  -->


        <div class="body_content_wrapper">
            <!-- Home Banner Style V1 -->
            @yield('index')

        </div>
    </div>
  </div>
            <!-- Our Footer -->
          @include('admin_backend.body.footer')
            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
                <!-- Wrapper End -->

                </body>


                </html>
