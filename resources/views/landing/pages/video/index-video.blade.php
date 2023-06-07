@extends('landing.layouts.f-master')

@section('f-content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/page-header-bg.jpg);">
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
                <h2>Vidio</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('dashboard.index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Vidio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Page Start-->
    <section class="news-page">
        <div class="container">
            <div class="row">
                @foreach ($videos as $video)
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{asset('uploads/image-video/'.$video->image_video)}}" alt="">
                                    <a href="{{route('landing.video.detail',['slug'=>$video->slug])}}">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="news-one__date">
                                    <p>{{ $video->created_at->format('d').' '.$video->created_at->monthName.', '.$video->created_at->year }}</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-tags"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{$video->category->title_category}}</p>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{route('landing.video.detail',['slug'=>$video->slug])}}">{{$video->title_video}}</a></h3>
                            </div>
                            <div class="news-one__hover">
                                <div class="news-one__hover-content">
                                    <h3 class="news-one__hover-title"><a href="{{route('landing.video.detail',['slug'=>$video->slug])}}">{{$video->title_video}}</a></h3>
                                </div>
                                <div class="news-one__hover-btn-box">
                                    <a href="{{route('landing.video.detail',['slug'=>$video->slug])}}">Baca Selengkapnya<span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--News Page End-->
@endsection
