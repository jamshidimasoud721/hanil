jQuery(document).ready(function($){

    $("body").scrollspy({
        target: ".header_area",
        offset: 200
    });
    $('#scrtop').on('click', function(event) {
        var $anchor = $(this);
        var headerH = '85';
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

});
