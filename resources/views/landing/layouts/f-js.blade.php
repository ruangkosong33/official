<script src="{{ asset('fk88/assets/vendors/jquery/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/highcharts/highcharts.min.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/touch/touch-paid-min.js') }}"></script>
<script src="{{ asset('fk88/assets/js/sip-calculator.js') }}"></script>
<script src="{{ asset('fk88/assets/js/lumpsum-calculator.js') }}"></script>
<script src="{{ asset('fk88/assets/js/inflation.js') }}"></script>
<script src="{{ asset('fk88/assets/js/target-amount-calculator.js') }}"></script>
<script src="{{ asset('fk88/assets/js/tab.js') }}"></script>
<script src="{{ asset('fk88/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('fk88/assets/js/sinace.js') }}"></script>
<script src="{{ asset('fk88/assets/js/flip.min.js') }}"></script>
{{-- <script src="https://code.responsivevoice.org/responsivevoice.js?key=vdMIvAC9"></script>
<script>
    $(document).ready(function() {
        responsiveVoice.setDefaultVoice("Indonesian Male");
        $('a').mouseenter(function() { // Attach this function to all mouseenter events for 'a' tags
            responsiveVoice.cancel(); // Cancel anything else that may currently be speaking
            responsiveVoice.speak($(this)
        .text()); // Speak the text contents of all nodes within the current 'a' tag
        });
        $(document).mouseup(function(e) { // attach the mouseup event for all div and pre tags
            setTimeout(function() { // When clicking on a highlighted area, the value stays highlighted until after the mouseup event, and would therefore stil be captured by getSelection. This micro-timeout solves the issue.
                responsiveVoice.cancel(); // stop anything currently being spoken
                responsiveVoice.speak(
            getSelectionText()); //speak the text as returned by getSelectionText
            }, 1);
        });
    });

    function getSelectionText() {
        var text = "";
        if (window.getSelection) {
            text = window.getSelection().toString();
            // for Internet Explorer 8 and below. For Blogger, you should use &amp;&amp; instead of &&.
        } else if (document.selection && document.selection.type != "Control") {
            text = document.selection.createRange().text;
        }
        return text;
    }
</script> --}}
<script>

    $(document).ready(function(){
    // $(".preloader").fadeOut('slow');

    let url = $('meta[name="url_getvisitor"]').attr('content');
    $.getJSON(`${url}`, function(dt) {
        $("#today-visitor").html(dt.amountVisitorToday)
        $("#total-visitor").html(dt.totalVisitor)
        $("#online-visitor").html(dt.onlineVisitor)
        $("#month-visitor").html(dt.amountVisitorThisMonth)
        $("#year-visitor").html(dt.amountVisitorThisYear)
    });
})
</script>
@stack('js')
