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
            <h2>Kepala Badan</h2>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('dashboard.index')}}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Profil</li>
                    <li><span>/</span></li>
                    <li>Kepala Badan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Team Page Start-->
<section class="team-page">
    <div class="container">
        <div class="row">
            @foreach ($leaders as $leader)
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="{{asset('uploads/foto-pimpinan/'.$leader->image_leader)}}" alt="">
                        </div>
                        <div class="team-one__hover-content">
                            <h3 class="team-one__hover-title"><a href="team-details.html">{{$leader->name_leader}}</a>
                            </h3>
                            <p class="team-one__hover-sub-title">Periode {{ $leader->periode }}</p>
                            <p class="team-one__hover-text">Kepala Badan BPKAD Prov Kaltim
                            </p>
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__title"><a href="team-details.html">{{$leader->name_leader}}</a></h3>
                        <p class="team-one__sub-title">Periode {{ $leader->periode }}</p>
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
