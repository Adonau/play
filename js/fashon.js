$(document).ready(function () {

    $(".fas-intro").slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
    })


    $(".fas-say__slider").slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 800,
        slidesToShow: 1,
        adaptiveHeight: true,
    })

    $(".fas-brends__slider").slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        slidesToShow: 5,
        adaptiveHeight: true,
    })


    $(window).scroll(function () {

        if ($(this).scrollTop() > 0) {
            $('.fas-header').addClass('fas-header--transform-t');
        }
        
        if ($(this).scrollTop() <= 0) {
            $('.fas-header').removeClass('fas-header--transform-t');
        }
    });

});