// JS Portfolio Sara Claeys

$(document).ready(function () {

    // Parallax

    $('.parallax-window').parallax({

    });

    // Menu
    $(".menu").click(function () {
        $(".links").toggleClass('open');
    });

    $(window).scroll(function () {
        $(".links").removeClass('open');
        event.preventDefault();
    });

    // Arrow down
    $(function () {
        $('a[href*=#]').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500, 'linear');
        });
    });

});