jQuery(document).ready(function($) {

    var mybutton = document.getElementById("scrtop");

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

});
