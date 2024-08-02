jQuery(document).ready(function ($) {

    $('.blog-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        rtl: true,
        navText: ["<i class='fal icon-angle-left icon-2x'></i>", "<i class='fal icon-angle-right icon-2x'></i>"],
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });

    $('.single_product_slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        rtl: true,
        navText: ["<i class='fal icon-angle-left'></i>", "<i class='fal icon-angle-right'></i>"],
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });

});
