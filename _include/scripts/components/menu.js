$(document).ready(function () {

    $('.open_btn').click(function () {
        $('.menu_content').css('width','100%');
        $('.menu_content_inner a').css('opacity','1');
        $('.close_btn').css('opacity','1');

    });

    $('.close_btn').click(function () {
        $('.menu_content').css('width','0');
        $('.menu_content_inner a').css('opacity','0');
        $('.close_btn').css('opacity','0');

    });

});
