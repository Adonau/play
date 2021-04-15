$(document).ready(function () {
    $(window).scroll(function () {

        if ($(this).scrollTop() > 0) {
            $('.pan-header').addClass('pan-header--transform');
        }

        if ($(this).scrollTop() <= 0) {
            $('.pan-header').removeClass('pan-header--transform');
        }
    });

    $('.pan-header__button').click(function () {
        $('.pan-header__button').toggleClass('pan-header__button-transform');

        $('.pan-header__list').toggleClass('pan-header__list-transform');
    });

    $('.pan-slider-large').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    $('.pan-section-team__slider').slick({
        centerMode: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        centerPadding: '10px',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 810,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3,
            }
        },

        {
            breakpoint: 770,
            settings: {
                centerMode: false,
                slidesToShow: 2,
            }
        },

        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
            }
        },
        ]
    });

    $('.pan-footer__slider').slick({
        centerMode: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        centerPadding: '40px',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 810,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3,
            }
        },

        {
            breakpoint: 770,
            settings: {
                centerMode: false,
                slidesToShow: 2,
            }
        },

        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
            }
        },
        ]
    });
});