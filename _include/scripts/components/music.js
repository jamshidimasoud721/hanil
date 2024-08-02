jQuery(document).ready(function ($) {


    // $('.enter').click(function () {
    //     var audio = new Audio('switch-1.wav');
    //     audio.play();
    //     console.log('done');
    // })


    var musicNight = document.getElementById("myMusic");
    $('.pause_music_night').click(function () {
        musicNight.pause();
        $('.play_music_night').fadeIn('slow');
        $(this).fadeOut('slow');
    });

    $('.play_music_night').click(function () {
        musicNight.play();
        $('.pause_music_night').fadeIn('slow');
        $(this).fadeOut('slow');
    });


});
