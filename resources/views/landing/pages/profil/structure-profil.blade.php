@extends('landing.layouts.f-master')
@section('f-content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/services-three-bg.png);">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{ asset('fk88/assets/images/shapes/page-header-shape-2.png') }}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{ asset('fk88/assets/images/shapes/page-header-shape-1.png') }}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{ asset('fk88/assets/images/shapes/page-header-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $structure->title_structure }}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('dashboard.index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Struktur Organisasi</li>
                        <li><span>/</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <!--Faq Search Start-->
    <section class="faq-search" style="padding-bottom: 10px">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Struktur Organisasi</span>
                </div>
            </div>
        </div>
    </section>
    <!--Faq Search End-->
    <!--Team Page Start-->
    <section class="team-page" style="padding-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__img mt-3">
                        <img src="{{ asset('uploads/image-structure/' . $structure->image_structure) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Page End-->
@endsection
