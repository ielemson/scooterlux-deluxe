! function(e) {
    "use strict";
    var a = e(window),
        l = e("body");
    "ontouchstart" in document.documentElement || l.addClass("no-touch");
    var t = e(".is-sticky");
    if (t.length > 0) {
        var i = e("#navbar").offset();
        a.scroll(function() {
            var e = a.scrollTop();
            a.width() > 0 && e > i.top + 4 ? t.hasClass("has-fixed") || t.addClass("has-fixed") : t.hasClass("has-fixed") && t.removeClass("has-fixed")
        })
    }
    var s = e(".navbar-toggler");
    s.length > 0 && s.on("click", function() {
        l.toggleClass("responsive-nav-fix")
    });
    var r = e("#slider");
    r.length > 0 && r.carousel({
        interval: 6e3,
        pause: "null"
    });
    var n = e(".has-carousel");
    n.length > 0 && n.each(function() {
        var a = e(this),
            l = a.data("items") ? a.data("items") : 4,
            t = l >= 3 ? 3 : l,
            i = t >= 1 ? 1 : t,
            s = a.data("delay") ? a.data("delay") : 4e3,
            r = !!a.data("auto"),
            n = !!a.data("loop"),
            o = !!a.data("dots"),
            d = !!a.data("navs"),
            h = a.data("margin") ? a.data("margin") : 30,
            c = a.data("animateOut") ? a.data("animateOut") : "fadeOut";
        a.addClass("owl-carousel").owlCarousel({
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: l,
            loop: n,
            nav: d,
            dots: o,
            margin: h,
            animateOut: c,
            autoplay: r,
            autoplayTimeout: s,
            autoplaySpeed: 700,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: i
                },
                768: {
                    items: t
                },
                1170: {
                    items: l
                }
            }
        })
    });
    var o = e(".logo-carousel");
    o.length > 0 && o.owlCarousel({
        items: 5,
        loop: !0,
        margin: 30,
        responsive: {
            0: {
                items: 2
            },
            379: {
                items: 3
            },
            720: {
                items: 4
            },
            1280: {
                items: 6
            }
        }
    });
    var d = e(".has-parallax");
    d.length > 0 && d.each(function() {
        e(this).parallaxie({
            speed: .4,
            offset: 0
        })
    }), e('a.scroller[href*="#"]:not([href="#"])').on("click", function() {
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
            var a = e(this.hash),
                l = !!this.hash.slice(1) && e("[name=" + this.hash.slice(1) + "]");
            if ((a = a.length ? a : l).length) return e("html, body").animate({
                scrollTop: a.offset().top - 70
            }, 1e3, "easeInOutExpo"), !1
        }
    }),  e(".scroller").on("click", function() {
        e(".navbar-collapse").collapse("hide")
    });
    var h = e(".imagebg");
    h.length > 0 && h.each(function() {
        var a = e(this),
            l = a.parent(),
            t = a.data("overlay"),
            i = a.children("img").attr("src"),
            s = void 0 !== t && "" !== t && t.split("-");
        void 0 !== i && "" !== i && (l.hasClass("has-bg-image") || l.addClass("has-bg-image"), "" !== s && "dark" === s[0] && (l.hasClass("light") || l.addClass("light")), a.css("background-image", 'url("' + i + '")').addClass("bg-image-loaded"))
    });
    var c = e("#subscribe-form");
    if (c.length > 0) {
        if (!e().validate || !e().ajaxSubmit) return console.log("subscribeForm: jQuery Form or Form Validate not Defined."), !0;
        if (c.length > 0) {
            var m = c.find("select.required"),
                u = c.find(".subscribe-results");
            c.validate({
                invalidHandler: function() {
                    u.slideUp(400)
                },
                submitHandler: function(a) {
                    u.slideUp(400), e(a).ajaxSubmit({
                        target: u,
                        dataType: "json",
                        success: function(l) {
                            var t = "error" === l.result ? "alert-danger" : "alert-success";
                            u.removeClass("alert-danger alert-success").addClass("alert " + t).html(l.message).slideDown(400), "error" !== l.result && e(a).clearForm()
                        }
                    })
                }
            }), m.on("change", function() {
                e(this).valid()
            })
        }
    }
    var f = e("#contact-request");
    if (f.length > 0) {
        if (!e().validate || !e().ajaxSubmit) return console.log("quoteForm: jQuery Form or Form Validate not Defined."), !0;
        if (f.length > 0) {
            var p = f.find("select.required"),
                g = f.find(".form-results");
            f.validate({
                invalidHandler: function() {
                    g.slideUp(400)
                },
                submitHandler: function(a) {
                    g.slideUp(400), e(a).ajaxSubmit({
                        target: g,
                        dataType: "json",
                        success: function(l) {
                            var t = "error" === l.result ? "alert-danger" : "alert-success";
                            g.removeClass("alert-danger alert-success").addClass("alert " + t).html(l.message).slideDown(400), "error" !== l.result && e(a).clearForm()
                        }
                    })
                }
            }), p.on("change", function() {
                e(this).valid()
            })
        }
    }
    var v = e(".video-pop");
    if (v.length > 0 && v.magnificPopup({
            type: "iframe"
        }), e("#typed").length > 0) new Typed("#typed", {
        stringsElement: "#typed-strings",
        typeSpeed: 100,
        loop: !0,
        backSpeed: 100,
        backDelay: 700,
        startDelay: 700
    });
    e("#particles-js").length > 0 && particlesJS("particles-js", {
        particles: {
            number: {
                value: 80,
                density: {
                    enable: !0,
                    value_area: 800
                }
            },
            color: {
                value: "#ffffff"
            },
            shape: {
                type: "circle",
                stroke: {
                    width: 0,
                    color: "#000000"
                },
                polygon: {
                    nb_sides: 5
                },
                image: {
                    src: "img/github.svg",
                    width: 100,
                    height: 100
                }
            },
            opacity: {
                value: .5,
                random: !1,
                anim: {
                    enable: !1,
                    speed: 1,
                    opacity_min: .1,
                    sync: !1
                }
            },
            size: {
                value: 5,
                random: !0,
                anim: {
                    enable: !1,
                    speed: 40,
                    size_min: .1,
                    sync: !1
                }
            },
            line_linked: {
                enable: !0,
                distance: 150,
                color: "#ffffff",
                opacity: .4,
                width: 1
            },
            move: {
                enable: !0,
                speed: 6,
                direction: "none",
                random: !1,
                straight: !1,
                out_mode: "out",
                attract: {
                    enable: !1,
                    rotateX: 600,
                    rotateY: 1200
                }
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: !0,
                    mode: "repulse"
                },
                onclick: {
                    enable: !0,
                    mode: "push"
                },
                resize: !0
            },
            modes: {
                grab: {
                    distance: 400,
                    line_linked: {
                        opacity: 1
                    }
                },
                bubble: {
                    distance: 400,
                    size: 40,
                    duration: 2,
                    opacity: 8,
                    speed: 3
                },
                repulse: {
                    distance: 200
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                }
            }
        },
        retina_detect: !0,
        config_demo: {
            hide_card: !1,
            background_color: "#b61924",
            background_image: "",
            background_position: "50% 50%",
            background_repeat: "no-repeat",
            background_size: "cover"
        }
    });
    var b = e("#preloader"),
        y = e("#loader");
    b.length > 0 && a.on("load", function() {
        y.fadeOut(300), b.delay(100).fadeOut(300)
    })
}(jQuery);