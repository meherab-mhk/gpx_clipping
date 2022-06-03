$(function () {

    //===============team slider=================
    $('.member_slide').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
    });

    //animation scroll js
    var html_body = $('html, body');
    $('nav a').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                html_body.animate({
                    scrollTop: target.offset().top - 30
                }, 2000);
                return false;
            }
        }
    });
    //back to top
    $(".back-to-top").click(function () {
        $('html,body').animate({ scrollTop: '0' }, 2000);
    });
    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();
        if (scrolling > 100) {
            $(".back-to-top").fadeIn(500);
        }
        else {
            $(".back-to-top").fadeOut(500);
        }
        //sticky menu
        if (scrolling > 50) {
            $(".navbar").addClass("head-bg");
        }
        else {
            $(".navbar").removeClass("head-bg");
        }
    });













});



