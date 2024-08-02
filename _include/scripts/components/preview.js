jQuery(document).ready(function ($) {
    var musicNight = document.getElementById("myMusic");
    var audio = document.getElementById("myAudio");

    function audioReady(){
        return $.when.apply($, $('audio').map(function(){
            var ready = new $.Deferred();
            $(this).one('canplay', ready.resolve);
            return ready.promise();
        }));
    }

    // public functions
    function showPreview() {
        localStorage.setItem('show', 'false');
    }

    function save() {
        localStorage.setItem('save', 'true');
    }

    function Reload() {
        window.location.reload();
        localStorage.removeItem('show');
        localStorage.removeItem('save');
        musicNight.pause();
        $('.home_intro').scrollTop(0);
        AOS.init();
    }



    //save localstorage
    $(document).ready(function () {
        var show = localStorage.getItem('show');
        if (show === 'false') {
            $('.preview').fadeOut(1500);
            $('#bdy').css('overflow', 'auto');
        } else {
            $('.preview').fadeIn();
            $('#bdy').css('overflow', 'hidden');
        }

        var save = localStorage.getItem('save');
        if (save === 'true') {
            AOS.init();
            setTimeout(function () {
                musicNight.play();
            }, 700);

            $('.music_area').fadeIn(3000);
        }
    });


    //enter to home page
    $("#switch").change(function() {
        if(this.checked) {
            audio.play();
            setTimeout(function () {
                musicNight.play();
            }, 700);

            $('.preview').fadeOut(2500);

            showPreview();
            save();
            $('#bdy').css('overflow', 'auto');

            setTimeout(function () {
                AOS.init();
                $('.music_area').fadeIn(3000);
            }, 3000);
        }
    });


    //reload page with button
    $('.reload').click(function () {
        Reload();
        $('.music_area').fadeOut();
    });
});