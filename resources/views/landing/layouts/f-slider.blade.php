@php
$banner=DB::table('banners')->get();
@endphp

<section class="main-slider-three">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        @foreach($banner as $key=>$banners)
        <div class="item main-slider-three__slide-1">
            <div class="main-slider-three__bg {{$key == 0 ? 'active' : ''}}"
                style="background-image: url('uploads/image-banner/{{$banners->image_banner}}');">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider-three__shape-1 img-bounce">
                <img src="{{asset('fk88/assets/images/shapes/main-slider-three-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="main-slider-three__content">
                    <div class="main-slider-three__shape-2 float-bob-x">
                        <img src="{{asset('fk88assets/images/shapes/main-slider-three-shape-2.png')}}" alt="">
                    </div>
                    <div class="main-slider-three__title-box">
                        <h2 class="main-slider-three__title">Consulting <br>
                            at a <span>Higher</span> <br> Level</h2>
                        <p class="main-slider-three__text">There are many variations of <br> passages of lorem
                            ipsum.</p>
                    </div>
                    <div class="main-slider-three__btn-box">
                        <a href="about.html" class="main-slider-three__btn thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>