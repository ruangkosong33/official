<section class="main-slider-three">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        @foreach($banners as $key=>$banner)
        <div class="item main-slider-three__slide-1">
            <div class="main-slider-three__bg {{$key == 0 ? 'active' : ''}}"
                style="background-image: url('uploads/image-banner/{{$banner->image_banner}}');">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider-three__shape-1 img-bounce">
                <img src="{{asset('fk88/assets/images/shapes/main-slider-three-shape-1.png')}}" alt="">
            </div>
        </div>
        @endforeach

    </div>
</section>