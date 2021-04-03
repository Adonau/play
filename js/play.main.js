$(document).ready(function () {

    $(window).scroll(function () {

        if ($(this).scrollTop() > 1) {
            $('.pl-header').addClass('pl-header--transform');
        } else if ($(this).scrollTop() <= 350) {
            $('.pl-header').removeClass('pl-header--transform');
        }

    });

    $('.pl-header__btn').click(function () {
        $('.pl-header__btn').toggleClass('pl-header__btn-transform');

        $('.pl-header__nav').toggleClass('pl-header__nav-transform');

        $('.pl-body').toggleClass('pl-body__transform');
    });

    setTimeout(function () {
        $('.pl-preload').addClass('pl-preload-trasform');
    }, 5000);


    $('.pl-intro__slider-wrap').slick({
        centerMode: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        centerPadding: '60px',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
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

    $('.pl-special__slider-wrap').slick({
        centerMode: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        centerPadding: '60px',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
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

    $('.pl-partners__slider').slick({
        centerMode: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        centerPadding: '60px',
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
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