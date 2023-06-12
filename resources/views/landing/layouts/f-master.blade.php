<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BPKAD - PROV KALTIM</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('fk88/assets/images/logo/logo.ico') }}">
    <meta name="description" content="BPKAD PROVINSI KALIMANTAN TIMUR" />
    <meta name="url_getvisitor" content="{{ route('getVisitor') }}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/sinace-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('fk88/assets/css/sinace.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/css/sinace-responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('fk88/assets/css/flip.min.css') }}" rel="stylesheet" />
    @stack('css')
    <style>
        .main-menu .main-menu__list>li>a,
        .main-menu .main-menu__list>li>ul>li>a {
            font-size: 14px
        }

        .main-menu .main-menu__list>li.current>a,
        .main-menu .main-menu__list>li:hover>a,
        .stricky-header .main-menu__list>li.current>a,
        .stricky-header .main-menu__list>li:hover>a {
            color: rgb(15, 33, 60);
            text-shadow: 0.05px 0 0 rgb(15 33 60 / 80%)
        }

        .main-menu-three__main-menu-box {
            width: 100%;
        }

        .tick {
            font-size: 1.6em;
        }

        /* rounder corners */
        #my-flip {
            /* increase border radius */
            border-radius: .3125em;

            /* increase spacing between letters */
            letter-spacing: .5em;
            text-indent: .5em;
        }

        /* black on white colors */
        #my-flip .tick-flip-panel {
            color: #555;
            background-color: #fafafa;
        }
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">

        <!-- Header -->
        @include('landing.layouts.f-nav')
        <!-- End Header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



        @yield('f-content')

        <!-- End Main Content -->

        <!--Site Footer Start-->
        @include('landing.layouts.f-footer')
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ asset('fk88/assets/images/logo/logo-bpkad.png') }}" width="135"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@sinace.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>

    <!-- Java Script -->
    @include('landing.layouts.f-js')
    <!-- End Java Script -->

</body>

</html>
