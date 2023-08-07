@extends('landing.layouts.f-master')

@push('css')
    <style>
        .brand-one__img>img{
            opacity: 1;
        }
    </style>
@endpush

@section('f-content')

    <!-- Slider Banner -->
    @include('landing.pages.beranda.slider')
    <!--Main Sllider Start -->

    <!-- Selayang Pandang -->
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
                                <span class="section-title__tagline">Selayang Pandang</span>
                            </div>
                            <h2 class="section-title__title">Badan Pengelolaan Keuangan & Aset Daerah</h2>
                        </div>
                        <p class="about-one__text">Selamat datang di Website Resmi BPKAD Provinsi Kalimantan Timur.
                            Website ini sebagai sarana publikasi untuk memberikan Informasi dan gambaran tentang BPKAD Provinsi Kalimantan Timur dalam melaksanakan pelayanan tugas informasi.</p>
                        <div class="about-one__points-and-experience">
                            <div class="about-one__points-box">
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Bidang Sekretariat</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Bidang Akuntansi</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Bidang Anggaran</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Bidang Perbendeharaan</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Bidang Pengelolaan BMD</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Jabatan Fungsional</p>
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
    <!-- Selayang Pandang -->

    <!-- Main Content -->
    <!-- Unit Layanan Kerja -->
    <section class="services-one">
        <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.png);">
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
                                <h2 class="section-title__title">Unit Layanan Kerja</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text">Layanan dan dukungan yang spesifik terhadap fungsi-fungsi kerja yang ada dalam organisasi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-increment"></span>
                            </div>
                            <div class="feature-two__content">
                                <h3><a href="{{route("landing.organization.index",['slug'=>'sekretariat'])}}">Bidang
                                        <br>Sekretariat</a></h3>
                                {{-- <p>Lorem ipsum is simply <br> free dolo sit amet, ctetur.</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-seo"></span>
                            </div>
                            <div class="feature-two__content">
                                <h3><a href="{{route("landing.organization.index",['slug'=>'bidang-anggaran'])}}">Bidang
                                        <br>Anggaran</a></h3>
                                {{-- <p>Lorem ipsum is simply <br> free dolo sit amet, ctetur.</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-growth"></span>
                            </div>
                            <div class="feature-two__content">
                                <h3><a href="{{route("landing.organization.index",['slug'=>'bidang-akuntansi'])}}">Bidang
                                        <br>Akuntansi</a></h3>
                                {{-- <p>Lorem ipsum is simply <br> free dolo sit amet, ctetur.</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->  
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-planning"></span>
                            </div>
                            <div class="feature-two__content">
                                <h3><a href="{{route("landing.organization.index",['slug'=>'bidang-perbendaharaan'])}}">Bidang
                                        <br>Perbendaharaan</a></h3>
                                {{-- <p>Lorem ipsum is simply <br> free dolo sit amet, ctetur.</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-checking"></span>
                            </div>
                            <div class="feature-two__content">
                                <h3><a href="{{route("landing.organization.index",['slug'=>'bidang-pengelolaan-bmd'])}}">Bidang
                                        <br>Pengelolaan BMD</a></h3>
                                {{-- <p>Lorem ipsum is simply <br> free dolo sit amet, ctetur.</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__icon">
                                <span class="icon-consultant"></span>
                            </div>
                            <div class="feature-two__content">
                                <h3><a href="{{route("landing.organization.index",['slug'=>'jabatan-fungsional-tertentu'])}}">Jabatan
                                        <br>Fungsional Tertentu</a></h3>
                                {{-- <p>Lorem ipsum is simply <br> free dolo sit amet, ctetur.</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->  
                </div>
            </div>
        </div>
    </section>
    <!-- Unit Layanan Kerja -->

    <!-- Sistem Informasi -->
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
                                    <h3 class="grow-business__right-points-title">Sistem Informasi Persediaan Aset
                                    </h3>
                                    <p class="grow-business__right-points-text">Sistem Informasi yang bertujuan mengelola, memelihara, dan 
                                        pengawasan terhadap aset-aset penting yang diperlukan untuk menunjang pengambilan keputusan tentang rencana anggaran dan akusisi investasi baru.
                                    </p>
                                </li>
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-consumer-behavior"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">Sistem Informasi Standar Harga
                                    </h3>
                                    <p class="grow-business__right-points-text">SIDIRGA - KALTIM merupakan sistem berbasis web digunakan untuk menampung 
                                        data Standar Harga sebagai acuan awal perencanaan dan penganggaran.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sistem Informasi-->

    <!--Youtube -->
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
                <h3 class="video-one__title">Youtube
                </h3>
                <div class="video-one__btn-box" style="visibility: hidden;">
                    <a href="#" class="video-one__btn thm-btn">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Youtube -->

    <!-- Berita -->
    <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Artikel Terbaru BPKAD</span>
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
    <!-- Berita -->
    
    <!-- Span Lapor -->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__img">
                    <img src="{{asset('fk88/assets/images/resources/lapor.png')}}" alt="">
                </div>
                <div class="cta-one__title">
                    <h3>“Berani LAPOR!",
                        <br>
                    Untuk Pelayanan Publik Baik
                    </h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href="https://www.lapor.go.id" class="cta-one__btn thm-btn">Lanjut</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Span Lapor -->

    <!-- Galeri -->
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
    <!-- Galeri -->

    <!-- List -->
    <section class="faq-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">frequently asked questions</span>
                            </div>
                            <h2 class="section-title__title">Building a Competitive
                                Business <span>Sectors</span></h2>
                        </div>
                        <div class="faq-one__experience-and-points-box">
                            {{-- <div class="faq-one__experience">
                                <div class="faq-one__experience-title-box">
                                    <div class="faq-one__experience-title-box-bg">
                                    </div>
                                    <h2 style="background-image: url(assets/images/backgrounds/experience-bg-1-1.jpg);"
                                        class="faq-one__experience-title">30</h2>
                                </div>
                                <p>Years
                                    <br> Experience</p>
                            </div> --}}
                            <ul class="faq-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Donec Quis felis Commodo</h3>
                                        <p>Lorem ipsum is simply free text dol sit amet, passage of consectetur
                                            notted.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Passage of consectetur notted.</h3>
                                        <p>Lorem ipsum is simply free text dol sit amet, passage of consectetur
                                            notted.</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="faq-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Donec Quis felis Commodo</h3>
                                        <p>Lorem ipsum is simply free text dol sit amet, passage of consectetur
                                            notted.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Passage of consectetur notted.</h3>
                                        <p>Lorem ipsum is simply free text dol sit amet, passage of consectetur
                                            notted.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-one__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What does your process look like?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages the majority have suffered
                                            alteration in some fo injected humour, or randomised words believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>Learn how we create unmatched solutions</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages the majority have suffered
                                            alteration in some fo injected humour, or randomised words believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How long do services take to complete?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages the majority have suffered
                                            alteration in some fo injected humour, or randomised words believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How can i find my financial record?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>There are many variations of passages the majority have suffered
                                            alteration in some fo injected humour, or randomised words believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- List -->

    {{-- <div class="services-details__points">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="services-details__points-single">
                    <div class="icon">
                        <span class="icon-writer"></span>
                    </div>
                    <div class="content">
                        <h3>Business Solution</h3>
                        <p>There are many of lorem Ipsum the majori have suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="services-details__points-single">
                    <div class="icon">
                        <span class="icon-data-analysis"></span>
                    </div>
                    <div class="content">
                        <h3>Market Rules</h3>
                        <p>There are many of lorem Ipsum the majori have suffered.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Sosial Media -->
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
                <!--SOSMED Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div id="gpr-kominfo-widget-container"></div>
                    </div>
                </div>
                <!--SOSMED Single End-->

            </div>
        </div>
    </section>
    <!--Sosial Media -->

    <!-- Link Eksternal -->
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
                    <a href="{{route('landing.organization.index',['slug'=>'sekretariat'])}}" target="__BLANK">
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
    <!-- Link Eksternal -->

    <!-- Kontak -->
    <section class="contact-one">
        <div class="contact-one__bg" style="background-image: url(../fk88/assets/images/bpkad/gdbpkad.png);">
        </div>
        <div class="contact-one__shape-1 float-bob-x">
            <img src="{{ asset('fk88/assets/images/shapes/contact-one-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mx-auto">
                    <iframe width="100%" height="100%"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.686093698549!2d117.1497487!3d-0.491497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f081824155f%3A0x43fd2c094037eae5!2sBPKAD%20Prov.%20Kaltim!5e0!3m2!1sen!2sid!4v1691318417480!5m2!1sen!2sid"
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
                                    <h3><a href="tel:054173333">(0541) 580 7777</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Email</p>
                                    <h3><a href="mailto:bpkadkaltim@gmail.com">bpkad@kaltimprov.go.id</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Alamat</p>
                                    <h3>Jl. Kesuma Bangsa No.7 Samarinda 75117</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kontak -->
    
@endsection

@push('js')
    {{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v10.0" nonce="2koYxy6w"></script> --}}
    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    {{-- <div class="elfsight-app-15d06d74-1030-470f-8553-3a63214fe751"></div> --}}
@endpush
