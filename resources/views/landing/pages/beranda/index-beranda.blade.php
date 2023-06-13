@extends('landing.layouts.f-master')

@section('f-content')
    <!-- Main Sllider Start -->
    @include('landing.pages.beranda.slider')
    <!--Main Sllider Start -->
    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('fk88/assets/images/bpkad/400x504.png') }}" alt="">
                                <div class="about-one__shape-1 float-bob-x">
                                    <img src="{{ asset('fk88/assets/images/shapes/about-one-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="about-one__shape-2 img-bounce">
                                    <img src="{{ asset('fk88/assets/images/shapes/about-one-shape-2.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="about-one__img-2">
                                <img src="{{ asset('fk88/assets/images/bpkad/404x440.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Selamat Datang</span>
                            </div>
                            <h2 class="section-title__title">Badan Pengelolaan Keuangan & Aset Daerah</h2>
                        </div>
                        <p class="about-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit
                            sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm
                            andhn.</p>
                        <div class="about-one__points-and-experience">
                            <div class="about-one__points-box">
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Strategy & Consulting</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Business Process</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Marketing Rules</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Partnerships</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!-- Main Content -->
    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg" style="background-image: url(../fk88/assets/images/backgrounds/services-one-bg.png);">
        </div>
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">what we’re doing</span>
                                </div>
                                <h2 class="section-title__title">Offering the Best Consulting
                                    <br> & Finance <span>Services</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                <br> elit sed do eiusmod tempor incididunt ut labore et simply free text dolore
                                magna
                                aliqua lonm andhn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="https://www.kaltimprov.go.id/">Pemprov Kaltim</a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('fk88/assets/images/logo/link-1.png') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-pie-chart"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="https://www.kaltimprov.go.id/">Lihat<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="https://sikap.kaltimprov.go.id/">SIKAP</a></h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('fk88/assets/images/logo/sikap.png') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-insurance"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="https://sikap.kaltimprov.go.id/">Lihat<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="http://sidirga.kaltimprov.go.id/">SIDIRGA</a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('fk88/assets/images/logo/sidirga.png') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-money-bag"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="http://sidirga.kaltimprov.go.id/">Lihat<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="https://bpkad.kaltimprov.go.id/ppid/">PPID</a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('fk88/assets/images/logo/ppid.png') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-profile"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="https://bpkad.kaltimprov.go.id/ppid/">Lihat<span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Grow Business Start-->
    <section class="grow-business">
        <div class="container">
            <div class="grow-business__inner">
                <div class="grow-business__bg"
                    style="background-image: url(../fk88/assets/images/backgrounds/grow-business-bg.jpg);"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="grow-business__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Kepala BPKAD Porvinsi Kaltim</span>
                                </div>
                                <h2 class="section-title__title">H.Fahmi Prima Laksana,SE.,MM</h2>
                            </div>
                            <p class="grow-business__text">Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu convenient scheduling, account nulla pariatur.</p>
                            <ul class="grow-business__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum is not simply random text</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Making this the first true generator on the Internet</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Various versions have evolved over the years</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="grow-business__right">
                            <div class="grow-business__shape-1 float-bob-x">
                                <img src="{{ asset('fk88/assets/images/shapes/grow-business-shape-1.png') }}"
                                    alt="">
                            </div>
                            {{-- <img src="{{asset('fk88/assets/images/team/kepala.png')}}" alt=""> --}}
                            <ul class="grow-business__right-points list-unstyled">
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-experience"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">Benefits by Investing
                                        <br> your Money
                                    </h3>
                                    <p class="grow-business__right-points-text">Sed non odio non elit porttit sit
                                        tincidunt.
                                        <br> Donec fermentum, elit sit amet
                                    </p>
                                </li>
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-consumer-behavior"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">The most Time-Consuming
                                        <br> Components
                                    </h3>
                                    <p class="grow-business__right-points-text">Sed non odio non elit porttit sit
                                        tincidunt.
                                        <br> Donec fermentum, elit sit amet
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Grow Business End-->

    <!--Video One Start-->
    <section class="video-one">
        <div class="video-one__bg" style="background-image: url(../fk88/assets/images/bpkad/1894x907.png);"></div>
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=3dpGlMsgk3w" class="video-popup">
                        <div class="video-one__video-icon">
                            <i class="ripple"></i>
                            <img src="{{ asset('fk88/assets/images/icon/play.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <h3 class="video-one__title">Badan Pengelolaan Keuangan & Aset Daerah
                    <br> Provinsi KALTIM
                </h3>
                <div class="video-one__btn-box" style="visibility: hidden;">
                    <a href="#" class="video-one__btn thm-btn">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__bg"
            style="background-image: url(../fk88/assets/images/backgrounds/testimonial-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">our feedbacks</span>
                            </div>
                            <h2 class="section-title__title">Clients are
                                <span>Talking</span>
                            </h2>
                        </div>
                        <p class="testimonial-one__left-text">Lorem Ipsum. Proin gravida nibh vel velit auctor
                            aliquet. Aenean solldin, lorem is simply.</p>
                        <div class="testimonial-one__rounded-text">
                            <a href="testimonials.html" class="testimonial-one__curved-circle-box">
                                <div class="curved-circle">
                                    <span class="curved-circle--item">
                                        380 satisfied clients
                                    </span>
                                </div><!-- /.curved-circle -->
                                <div class="testimonial-one__icon">
                                    <img src="{{ asset('fk88/assets/images/icon/main-slider-two-rounded-icon.png') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": false,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('fk88/assets/images/testimonial/testimonial-1-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                            not sit amet,
                                            notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="testimonials.html">Aleesha Brown</a></h3>
                                        <p>Happy Client</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('fk88/assets/images/testimonial/testimonial-1-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                            not sit amet,
                                            notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="testimonials.html">Mike Hardson</a></h3>
                                        <p>Happy Client</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('fk88/assets/images/testimonial/testimonial-1-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor
                                            not sit amet,
                                            notted adipisicing elit sed do eiusmod incididunt labore et dolore
                                            text.</p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="testimonials.html">Sarah Albert</a></h3>
                                        <p>Happy Client</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Project One Start-->
    <section class="project-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Galeri Kegiatan BPKAD</span>
                </div>
                <h2 class="section-title__title">Galeri</span>
                </h2>
            </div>
            <div class="project-one__bottom">
                <div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel"
                    data-owl-options='{
                    "loop": true,
                    "autoplay": false,
                    "margin": 30,
                    "nav": true,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    @foreach ($latestGallery as $gallery)
                        <!--Project One Single Start-->
                        <div class="item">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="{{ asset('uploads/image-gallery/' . $gallery->image_gallery) }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="project-one__content">
                                    <p>{{ $gallery->category->title_category }}</p>
                                    <h3><a href="{{ route('landing.gallery.detail', ['slug' => $gallery->slug]) }}">{{ substr(strip_tags($gallery->title_gallery), 0, 45) . '...' }}
                                    </h3>
                                    <div class="project-one__arrow">
                                        <a href="{{ route('landing.gallery.detail', ['slug' => $gallery->slug]) }}"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                    @endforeach
                </div>
            </div>
            <div class="about-one__btn-box text-center" style="display: block;margin-top: 25px;">
                <a href="{{ route('landing.gallery.index') }}" class="about-one__btn thm-btn">Lihat Lainnya</a>
            </div>
        </div>
    </section>
    <!--Project One End-->

    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="team-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="team-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">meet our team</span>
                                </div>
                                <h2 class="section-title__title">Meet the People Behind
                                    <br> the High <span>Success</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="team-one__right">
                            <p class="team-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                                elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna
                                aliqua lonm andhn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-one__bottom">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('fk88/assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <div class="team-one__hover-arrow-box">
                                        <a href="team-details.html" class="team-one__hover-arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="team-one__hover-title"><a href="team-details.html">Kevin Martin</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">Consultant</p>
                                    <p class="team-one__hover-text">There are many vartion of passages of available.
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><span
                                            class="fas fa-share-alt"></span></a>
                                </div>
                                <h3 class="team-one__title"><a href="team-details.html">Kevin Martin</a></h3>
                                <p class="team-one__sub-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('fk88/assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <div class="team-one__hover-arrow-box">
                                        <a href="team-details.html" class="team-one__hover-arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="team-one__hover-title"><a href="team-details.html">Jeesica Brown</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">Consultant</p>
                                    <p class="team-one__hover-text">There are many vartion of passages of available.
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><span
                                            class="fas fa-share-alt"></span></a>
                                </div>
                                <h3 class="team-one__title"><a href="team-details.html">Jeesica Brown</a></h3>
                                <p class="team-one__sub-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('fk88/assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <div class="team-one__hover-arrow-box">
                                        <a href="team-details.html" class="team-one__hover-arrow"><span
                                                class="fas fa-share-alt"></span></a>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="team-one__hover-title"><a href="team-details.html">Mike Hardson</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">Consultant</p>
                                    <p class="team-one__hover-text">There are many vartion of passages of available.
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__arrow-box">
                                    <a href="team-details.html" class="team-one__arrow"><span
                                            class="fas fa-share-alt"></span></a>
                                </div>
                                <h3 class="team-one__title"><a href="team-details.html">Mike Hardson</a></h3>
                                <p class="team-one__sub-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__inner">
            <div class="counter-one__shadow"></div>
            <div class="counter-one__bg"
                style="background-image: url(../fk88/assets/images/backgrounds/counter-one-bg.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="counter-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">fun facts</span>
                                </div>
                                <h2 class="section-title__title">Consultancy Funfacts
                                    <br> in Great <span>Numbers</span>
                                </h2>
                            </div>
                            <p class="counter-one__text">Leverage agile frameworks to provide a robust synopsis for
                                high level overviews. Iterative approaches to corporate strategy data foster to
                                collaborative thinking.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="counter-one__right">
                            <ul class="counter-one__count-box list-unstyled">
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-checking"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="886" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Projects Completed</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-recommend"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="600" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Satisfied Customers</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-consulting"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="960" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Expert Consultants</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-one__bottom">
            <div class="container">
                <div class="counter-one__bottom-inner">
                    <p class="counter-one__bottom-text">Need best business consultation solutions & services? <a
                            href="#">Send a Request</a></p>
                    <div class="counter-one__call-box">
                        <p>Call Free <a href="tel:9200009850">+92 (0000)-9850</a></p>
                        <div class="counter-one__call-icon">
                            <span class="icon-telephone-1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="brand-one__title"></div>
        <div class="container">
            <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
                "items": 3,
                "margin": 30,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":true,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "768":{
                        "items":3
                    },
                    "992":{
                        "items": 5
                    }
                }
            }'>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="http://bpk.go.id" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/bpk-1.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="http://kemenkeu.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/kemenkeu.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="http://www.lkpp.go.id/v3/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/lkpp.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://www.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/link-1.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://lpse.kaltimprov.go.id/eproc4" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/lpse-300.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://tepra.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/tepra.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://pion.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/pionn.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://sipd.kemendagri.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/sipd.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://aspirasi.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/Aspirasi.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://ppid.kaltimprov.go.id/data-sidik" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/Sidik.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://pemantik.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/pemantik-1.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://sikap.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/sikap.png') }}" alt="">
                        </div>
                    </a>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                    <a href="https://simdaren.kaltimprov.go.id/" target="__BLANK">
                        <div class="brand-one__img">
                            <img src="{{ asset('fk88/assets/images/brand/Simdaren.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <!-- If we need navigation buttons -->
        </div>
    </section>
    <!--Brand One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Aritkel Terbaru BPKAD</span>
                </div>
                <h2 class="section-title__title">Berita Terbaru</h2>
            </div>
            <div class="row">
                @foreach ($latestPost as $post)
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{ asset('uploads/image-post/' . $post->image_post) }}" alt="">
                                    <a href="{{ route('berita.detail', ['slug' => $post->slug]) }}">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="news-one__date">
                                    <p>{{ $post->created_at->format('d') . ' ' . $post->created_at->monthName . ', ' . $post->created_at->year }}
                                    </p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-tags"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $post->category->title_category }}</p>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a
                                        href="{{ route('berita.detail', ['slug' => $post->slug]) }}">{{ $post->title_post }}</a>
                                </h3>
                                <p class="news-one__text">
                                    {{ substr(strip_tags($post->description_post), 0, 100) . '...' }}
                                </p>
                            </div>
                            <div class="news-one__hover">
                                <div class="news-one__hover-content">
                                    <h3 class="news-one__hover-title"><a
                                            href="{{ route('berita.detail', ['slug' => $post->slug]) }}">{{ $post->title_post }}</a>
                                    </h3>
                                    <p class="news-one__hover-text">
                                        {{ substr(strip_tags($post->description_post), 0, 100) . '...' }}
                                    </p>
                                </div>
                                <div class="news-one__hover-btn-box">
                                    <a href="{{ route('berita.detail', ['slug' => $post->slug]) }}">Baca Selengkapnya<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                @endforeach
            </div>
            <div class="about-one__btn-box text-center" style="display: block;">
                <a href="{{ route('berita.index') }}" class="about-one__btn thm-btn">Berita Terbaru Lainnya</a>
            </div>
        </div>
    </section>
    <!--News One End-->

    <!--SOSMED Start-->
    <section class="news-one" style="padding-top: 20px">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <h2 class="section-title__title">Update Terkini</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--SOSMED Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="elfsight-app-15d06d74-1030-470f-8553-3a63214fe751"></div>
                    </div>
                </div>
                <!--SOSMED Single End-->

                <!--SOSMED Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div id="gpr-kominfo-widget-container"></div>
                    </div>
                </div>
                <!--SOSMED Single End-->
                <!--SOSMED Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Jadwal Kegiatan</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @forelse ($latestEvent as $event)
                                    
                                <li>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            @php
                                                $date_event = \Carbon\Carbon::parse($event->date_event);
                                            @endphp
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-clock"></i>{{ $date_event->format('d').' '.$date_event->monthName.', '.$date_event->year }}</span>
                                            <a
                                                href="{{ route('profil.event') }}">{{ substr($event->title_event, 0, 35) . '...' }}</a>
                                        </h3>
                                    </div>
                                </li>
                                @empty
                                    <div style="height: 400px;" class="text-center">
                                        <p style="vertical-align: middle;">Belum ada jadwal kegiatan</p>
                                    </div>
                                @endforelse 
                            </ul>
                            <div class="about-one__btn-box text-center mt-5" style="display: block;">
                                <a href="{{ route('profil.event') }}" class="about-one__btn thm-btn">Jadwal Kegiatan
                                    Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--SOSMED Single End-->
            </div>
        </div>
    </section>
    <!--SOSMED End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="contact-one__bg" style="background-image: url(../fk88/assets/images/backgrounds/contact-one-bg.jpg);">
        </div>
        <div class="contact-one__shape-1 float-bob-x">
            <img src="{{ asset('fk88/assets/images/shapes/contact-one-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mx-auto">
                    <iframe width="100%" height="100%"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.66298776662!2d117.139331!3d-0.501074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67fa0cf3b5609%3A0x9efc250dd531e8b4!2sKantor%20Gubernur%20Kalimantan%20Timur!5e0!3m2!1sen!2sus!4v1686381485332!5m2!1sen!2sus"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">BPKAD KALTIM</span>
                            </div>
                            <h2 class="section-title__title">Kontak Kami</span>
                            </h2>
                        </div>
                        <ul class="contact-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone-1"></span>
                                </div>
                                <div class="text">
                                    <p>Nomor Telepon</p>
                                    <h3><a href="tel:054173333">(0541) 73333</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Email</p>
                                    <h3><a href="mailto:bpkadkaltim@gmail.com">bpkadkaltim@gmail.com</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Alamat</p>
                                    <h3>Jl. Gajah Mada No.2, Jawa, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur
                                        75242</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->
@endsection

@push('js')
    {{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v10.0" nonce="2koYxy6w"></script> --}}
    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    {{-- <div class="elfsight-app-15d06d74-1030-470f-8553-3a63214fe751"></div> --}}
@endpush
