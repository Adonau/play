$(document).ready(function () {
    $(function () {
        function o(o, t) {
            this.el = o || {}, this.multiple = t || !1, this.el.find(".dropdownlink").on("click", {
                el: this.el,
                multiple: this.multiple
            }, this.dropdown)
        }
        o.prototype.dropdown = function (o) {
            var t = o.data.el,
                e = $(this),
                n = e.next();
            n.slideToggle(), e.parent().toggleClass("nav__name-open"), o.data.multiple || t.find(".submenuItems").not(n).slideUp().parent().removeClass("nav__name-open")
        };
        new o($(".accordion--menu"), !1)
    }), $(".intro__slider").slick({
        dots: !1,
        arrows: !1,
        infinite: !0,
        autoplay: !0,
        fade: !0,
        autoplaySpeed: 4e3,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: !0
    }), $(".button-gam").click(function () {
        $(".header").toggleClass("header-media"), $(".button-gam").toggleClass("button-gam__transform")
    }), $(".p-button-gam").click(function () {
        $(".portfolio-logo").toggleClass("portfolio-logo-media"), $(".p-button-gam").toggleClass("p-button-gam__transform"), $(".portfolio-nav__list").toggleClass("portfolio-nav__list-media")
    })
    setTimeout(function () {
        $('.portfolio-preload').addClass('portfolio-preload-transform');
    }, 2300);
});