$(window).scroll(function () {
    var t, n, r, s, a;
    t = "05/02/2021 02:00:00 AM", t = (t = new Date(t)).getTime(), isNaN(t) || setInterval(function () {
        var e = new Date,
            e = new Date(e.getUTCFullYear(), e.getUTCMonth(), e.getUTCDate(), e.getUTCHours(), e.getUTCMinutes(), e.getUTCSeconds()),
            e = parseInt((t - e.getTime()) / 1e3);
        0 <= e && (n = parseInt(e / 86400), e %= 86400, r = parseInt(e / 3600), e %= 3600, s = parseInt(e / 60), e %= 60, a = parseInt(e), document.getElementById("days").innerHTML = parseInt(n, 10), document.getElementById("hours").innerHTML = ("0" + r).slice(-2), document.getElementById("minutes").innerHTML = ("0" + s).slice(-2), document.getElementById("seconds").innerHTML = ("0" + a).slice(-2))
    }, 1e3), 1 < $(this).scrollTop() ? $(".portfolio-header-tampl").addClass("p-header--transform") : $(this).scrollTop() <= 350 && $(".portfolio-header-tampl").removeClass("p-header--transform")
});