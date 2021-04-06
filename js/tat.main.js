
$(document).ready(function () {
    $('.tat-header__button').click(function () {
        $('.tat-header__button').toggleClass('tat-header__button-transform');
        $('.tat-header__list').toggleClass('tat-header__list-transform');
        $('.tat-header').toggleClass('tat-header__transform');
    });

    new WOW().init();
});