import $ from "jquery";
const { ready } = require("jquery");
require("./bootstrap");

// Contact Btns (WhatsApp , Email)

$(".whats-app")
    .on("mouseenter", () => {
        $(".whats-app .fa-whatsapp").addClass("fa-bounce");
    })
    .on("mouseleave", () => {
        $(".whats-app .fa-whatsapp").removeClass("fa-bounce");
    });
$(".email-contact")
    .on("mouseenter", () => {
        $(".email-contact .fa-envelope").addClass("fa-bounce");
    })
    .on("mouseleave", () => {
        $(".email-contact .fa-envelope").removeClass("fa-bounce");
    });

// Nabvar onScroll
let top = 611.6875;
$(window).on("scroll", () => {
    if ($(window).scrollTop() > top) {
        $(".navbar").css(
            "cssText",
            "position : fixed !important;top :-20px;background-color: rgba(0, 0, 0, 0.8) !important"
        );
        $(".navbar").animate(
            {
                top: 0,
            },
            500
        );
    } else {
        $(".navbar").css(
            "cssText",
            "position : absolute !important; top : unset !important ;"
        );
        $(".navbar").stop({
            top,
        });
    }
});

// Service deps

$(".services-nav").on("click", ".nav-link", function () {
    $(".services-nav .nav-link").removeClass("active");
    $(this).addClass("active");
    if ($(this).text() == "All") {
        $(".services-deps .row div").fadeIn(800);
    } else {
        $(".services-deps .row>div").hide();
        $(
            ".services-deps .row div[box-type = " +
                $(this).text().toLocaleLowerCase() +
                "]"
        ).fadeIn(800);
    }
});

// service-details-page Gallery

$(".service-details-page .service-imgs img").on('mouseenter' , function(){
    $('.main-show').attr('src' , $(this).attr('src'));
})

// service-details-page Rating

$(".service-details-page .add-rate .my-star").on("click", function () {
    $(this).addClass("active-rate").prevAll().addClass("active-rate");
    $(this).nextAll().removeClass("active-rate");
    console.log($(this).attr('data-star'));
});
