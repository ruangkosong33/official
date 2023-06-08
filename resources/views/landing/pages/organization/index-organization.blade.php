@extends('landing.layouts.f-master')
@section('f-content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/page-header-bg.jpg);">
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
            <h2>{{$division->name_division}}</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('dashboard.index')}}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Profil</li>
                    <li><span>/</span></li>
                    <li>{{$division->name_division}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Faq Search Start-->
<section class="faq-search">
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
            @foreach ($division->employee as $employee)
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{asset('uploads/image-pegawai/'.$employee->image_employee)}}" alt="">
                        </div>
                        <div class="team-one__hover-content">
                            <h3 class="team-one__hover-title"><a href="team-details.html">{{$employee->name_employee}}</a>
                            </h3>
                            <p class="team-one__hover-sub-title">{{ $employee->position }}</p>
                            <p class="team-one__hover-text">
                                Nip : {{$employee->nip}} <br>
                                Agama : {{$employee->religion}} <br>
                                Status PNS : {{$employee->religion}} <br>
                                Pendidikan Terakhir : {{$employee->education_school}} <br>
                                Pendidikan Struktural terakhir : {{$employee->education_work}}<br>
                            </p>
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__title"><a href="team-details.html">{{$employee->name_employee}}</a></h3>
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