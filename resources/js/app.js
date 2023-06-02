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
let top = $(".dream").position().top;
$(window).on("scroll", () => {
    if ($(window).scrollTop() > top) {
        $(".navbar").css(
            "cssText",
            "position : fixed !important;top :-20px;background-color: rgba(0, 0, 0, 0.8) !important"
        );
        $(".navbar").animate(
            {
                top: 0
            },
            500
        );
    } else {
        $(".navbar").css(
            "cssText",
            "position : absolute !important; top : unset !important ;"
        );
        $(".navbar").stop({
            top
        });
    }
});
