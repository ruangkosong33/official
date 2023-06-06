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
                <h2>Detail Berita</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('dashboard.index')}}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Detail Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{asset('uploads/image-post/'.$post->image_post)}}" alt="">
                            <div class="news-details__date">
                                <p>{{ $post->created_at->format('d').' '.$post->created_at->monthName.', '.$post->created_at->year }}</p>
                            </div>
                        </div>
                        <div class="news-details__content">
                            <ul class="news-details__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-tags"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{$post->category->title_category}}</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="news-details__title-1">{{$post->title_post}}</h3>
                            <p class="news-details__text-1">{!! $post->description_post !!}</p>
                        </div>
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Kategori</span>
                                <a href="#">{{ $post->category->title_category }}</a>
                            </p>
                            <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Pencarian">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Berita Terbaru</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($latestPosts as $latestPost)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('uploads/image-post/'.$latestPost->image_post)}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-tags"></i>{{$latestPost->category->title_category}}</span>
                                                <a href="{{route('berita.detail',['slug'=>$latestPost->slug])}}">{{ substr($latestPost->title_post, 0, 35) . '...' }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Kategori</h3>
                            <div class="sidebar__tags-list">
                                @foreach ($categories as $category)
                                    <a href="#">{{$category->title_category}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->

@endsection