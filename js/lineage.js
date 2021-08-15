pageslider(document.getElementById('wrap'), function () { });



!$(document).ready(function () {
    $('.line-header__btn-menu').click(function () {
        $('.line-header__btn-menu').toggleClass('line-header__btn-menu-transform');
        $('.line-header__nav').toggleClass('line-header__nav-transform');

        if (!$('.line-header__nav').hasClass('line-header__nav-transform')) {
            $('.line-header__nav').addClass('line-header__nav-transform-non');
        } else {
            $('.line-header__nav').removeClass('line-header__nav-transform-non');
        }

        if (!$('.line-header__btn-menu').hasClass('line-header__btn-menu-transform')) {
            $('.line-header__btn-menu').addClass('line-header__btn-menu-transform-non');
        } else {
            $('.line-header__btn-menu').removeClass('line-header__btn-menu-transform-non');
        }
    });
});

