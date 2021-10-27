(function($){
    "use strict";

    $(document).ready(function()
    {
        new WOW().init();

        $('.carousel').slick({
            autoplay: true,
            infinite: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', 
            dots: true,
            autoplaySpeed: 5000,
            // pauseOnFocus: false,
            // pauseOnHover: false
        });
        $('.slick-slider').slickAnimation();
    });
})(jQuery);