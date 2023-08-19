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
                <h2>{{ $division->name_division }}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('dashboard.index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Profil</li>
                        <li><span>/</span></li>
                        <li>{{ $division->name_division }}</li>
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
                    <span class="section-title__tagline">Organisasi</span>
                </div>
                <h2 class="section-title__title">{{ $division->name_division }}</span></h2>
            </div>
        </div>
    </section>
    <!--Faq Search End-->
    <!--Team Page Start-->
    <section class="team-page" style="padding-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    {!! $division->deskripsi_so !!}
                    <h3 class="project-details__title-2">Struktur Organisasi</h3>
                    <div class="project-details__img mt-3">
                        <img src="{{ asset('uploads/image-so/' . $division->image_so) }}" alt="">
                    </div>
                </div>
            </div>
            <h3 class="project-details__title-2">Kepala Bidang</h3>
            @if ($kepalaBidang != null)
                <div class="team-details__top pt-5 pb-3" style="border-bottom: none">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__left">
                                <div class="team-details__img">
                                    <img src="{{ asset('uploads/image-pegawai/' . $kepalaBidang->image_employee) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name">{{ $kepalaBidang->name_employee }}</h3>
                                    <p class="team-details__top-sub-title">{{ $kepalaBidang->position }}</p>
                                    <div class="sip-calculation" style="box-shadow: none;">
                                        <div class="sip-calculation-content total-sip-form-sip" style="padding: 5px 0;">
                                            <div class="total-sip-form-calculation">
                                                <div class="sip-calculation-details">
                                                    <p class="sip-form-calculation">
                                                        <span>Nip</span>
                                                        <b><i id="monthly-sip"
                                                                style="font-size: 16px !important;">{{ $kepalaBidang->nip }}</i></b>
                                                    </p>
                                                    <p class="sip-form-calculation">
                                                        <span>Agama</span>
                                                        <b><i id="total-interest"
                                                                style="font-size: 16px !important;">{{ $kepalaBidang->religion }}</i></b>
                                                    </p>
                                                    <p class="sip-form-calculation">
                                                        <span> Status PNS</span>
                                                        <b><i id="total-amount"
                                                                style="font-size: 16px !important;">{{ $kepalaBidang->status }}</i></b>
                                                    </p>
                                                    <p class="sip-form-calculation">
                                                        <span> Pendidikan Terakhir</span>
                                                        <b><i id="total-amount"
                                                                style="font-size: 16px !important;">{{ $kepalaBidang->education_school }}</i></b>
                                                    </p>
                                                    <p class="sip-form-calculation">
                                                        <span> Pendidikan Struktural terakhir</span>
                                                        <b><i id="total-amount"
                                                                style="font-size: 16px !important;">{{ $kepalaBidang->education_work }}</i></b>
                                                    </p>
                                                </div>
                                            </div><!-- total-sip-form-calculation -->
                                        </div><!-- sip-calculation-content -->
                                    </div>
                                    <!--sip-calculation-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row mt-1">
                <h3 class="project-details__title-2">Kepala Sub Bidang</h3>
                
                @foreach ($kepalaSeksi as $employee)
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('uploads/image-pegawai/' . $employee->image_employee) }}"
                                        alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <h3 class="team-one__hover-title"><a
                                            href="javascript:;">{{ $employee->name_employee }}</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">{{ $employee->position }}</p>
                                    <p class="team-one__hover-text">
                                        Nip : {{ $employee->nip }} <br>
                                        Agama : {{ $employee->religion }} <br>
                                        Status PNS : {{ $employee->status }} <br>
                                        Pendidikan Terakhir : {{ $employee->education_school }} <br>
                                        Pendidikan Struktural terakhir : {{ $employee->education_work }}<br>
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="javascript:;">{{ $employee->name_employee }}</a></h3>
                                <p class="team-one__sub-title">{{ $employee->position }}</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                @endforeach
            </div>
            <div class="row mt-1">
                <h3 class="project-details__title-2">Staff</h3>
                @foreach ($staff as $employee)
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('uploads/image-pegawai/' . $employee->image_employee) }}"
                                        alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <h3 class="team-one__hover-title"><a
                                            href="javascript:;">{{ $employee->name_employee }}</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">{{ $employee->position }}</p>
                                    <p class="team-one__hover-text">
                                        Nip : {{ $employee->nip }} <br>
                                        Agama : {{ $employee->religion }} <br>
                                        Status PNS : {{ $employee->status }} <br>
                                        Pendidikan Terakhir : {{ $employee->education_school }} <br>
                                        Pendidikan Struktural terakhir : {{ $employee->education_work }}<br>
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="javascript:;">{{ $employee->name_employee }}</a></h3>
                                <p class="team-one__sub-title">{{ $employee->position }}</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                @endforeach
            </div>
            <div class="row mt-1">
                <h3 class="project-details__title-2">Tenaga Alih Daya</h3>
                @foreach ($tenagaAlihDaya as $employee)
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset('uploads/image-pegawai/' . $employee->image_employee) }}"
                                        alt="">
                                </div>
                                <div class="team-one__hover-content">
                                    <h3 class="team-one__hover-title"><a
                                            href="javascript:;">{{ $employee->name_employee }}</a>
                                    </h3>
                                    <p class="team-one__hover-sub-title">{{ $employee->position }}</p>
                                    <p class="team-one__hover-text">
                                        Nip : {{ $employee->nip }} <br>
                                        Agama : {{ $employee->religion }} <br>
                                        Status PNS : {{ $employee->status }} <br>
                                        Pendidikan Terakhir : {{ $employee->education_school }} <br>
                                        Pendidikan Struktural terakhir : {{ $employee->education_work }}<br>
                                    </p>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__title"><a href="javascript:;">{{ $employee->name_employee }}</a>
                                </h3>
                                <p class="team-one__sub-title">{{ $employee->position }}</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Team Page End-->
@endsection
