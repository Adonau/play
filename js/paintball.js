$(document).ready(function () {


    $('.pai-intro__slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        pauseOnHover: false,
        autoplay: true,
        autoplaySpeed: 7500,
        slidesToShow: 1,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });


    $('.pai-what__slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        pauseOnHover: false,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        speed: 500,
        fade: false,
        cssEase: 'linear'
    });

    $('.pai-product__slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        pauseOnHover: false,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        speed: 500,
        fade: false,
        cssEase: 'linear'
    });


});