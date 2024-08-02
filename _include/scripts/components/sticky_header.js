jQuery(document).ready(function ($) {
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 120) {
            $('.header').addClass("stuck")
        } else {
            $('.header').removeClass("stuck")
        }
    });
});