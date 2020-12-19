
<!-- External JavaScripts -->
<script src="{{url('front/assets/js/jquery.min.js')}}"></script>
<script src="{{url('front/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{url('front/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('front/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{url('front/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{url('front/assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{url('front/assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{url('front/assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{url('front/assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{url('front/assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{url('front/assets/vendors/masonry/filter.js')}}"></script>
<script src="{{url('front/assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{url('front/assets/js/functions.js')}}"></script>
<script src="{{url('front/assets/js/contact.js')}}"></script>
<!-- <script src='{{url('front/assets/vendors/switcher/switcher.js')}}'></script> -->
<!-- Revolution JavaScripts Files -->
<script src="{{url('front/assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{url('front/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        'use strict';
        var ttrevapi;
        var tpj = jQuery;
        if (tpj("#rev_slider_14_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_14_1");
        } else {
            ttrevapi = tpj("#rev_slider_14_1").show().revolution({
                sliderType: "hero",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                particles: {
                    startSlide: "first", endSlide: "last", zIndex: "6",
                    particles: {
                        number: { value: 100 }, color: { value: "#ffffff" },
                        shape: {
                            type: "circle", stroke: { width: 0, color: "#ffffff", opacity: 1 },
                            image: { src: "" }
                        },
                        opacity: { value: 1, random: true, min: 0.25, anim: { enable: false, speed: 3, opacity_min: 0, sync: false } },
                        size: { value: 3, random: true, min: 0.5, anim: { enable: false, speed: 40, size_min: 1, sync: false } },
                        line_linked: { enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
                        move: { enable: true, speed: 1, direction: "top", random: true, min_speed: 1, straight: false, out_mode: "out" }
                    },
                    interactivity: {
                        events: { onhover: { enable: true, mode: "bubble" }, onclick: { enable: false, mode: "repulse" } },
                        modes: { grab: { distance: 400, line_linked: { opacity: 0.5 } }, bubble: { distance: 400, size: 0, opacity: 0.01 }, repulse: { distance: 200 } }
                    }
                },
                navigation: {
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [768, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 400,
                    levels: [1, 2, 3, 4, 5, 10, 15, 20, 25, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        }

        /*if($('.setResizeMargin').length > 0){
            var screenSize  = $( window ).width();
            var containerSize = $('.container').width();
            var getMargin = (screensize - containersize)/2;
            $('.setResizeMargin').css('margin-left',getMargin);
        }*/


    });	/*ready*/
</script>
</body>


</html>
