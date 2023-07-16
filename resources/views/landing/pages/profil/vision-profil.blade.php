@extends('landing.layouts.f-master')
@section('f-content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/service-three-bg.jpg);">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{asset('fk88/assets/images/shapes/page-header-shape-2.png')}}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{asset('fk88/assets/images/shapes/page-header-shape-1.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{asset('fk88/assets/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Visi & Misi</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('dashboard.index')}}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Profil</li>
                        <li><span>/</span></li>
                        <li>Visi & Misi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="about-four__right" style="margin-right:70px;margin-left: 0px">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">{{$vision->title_vision}}</h2>
                        </div>
                        <p class="about-four__text">{!! $vision->description_vision !!}</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{asset('fk88/assets/images/bpkad/visi-misi.png')}}" alt="">
                            </div>
                            {{-- <div class="about-four__img-two">
                                <img src="{{asset('fk88/assets/images/resources/about-four-img-2.jpg')}}" alt="">
                            </div> --}}
                            <div class="about-four__shape-1 img-bounce"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->
@endsection