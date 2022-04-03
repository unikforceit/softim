/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

!function (t) {
    "use strict";
    wp.customize("blogname", function (i) {
        i.bind(function (i) {
            t(".site-title a").text(i)
        })
    }), wp.customize("blogdescription", function (i) {
        i.bind(function (i) {
            t(".site-description").text(i)
        })
    }), wp.customize("header_textcolor", function (i) {
        i.bind(function (i) {
            "blank" === i ? t(".site-title, .site-description").css({
                clip: "rect(1px, 1px, 1px, 1px)",
                position: "absolute"
            }) : (t(".site-title, .site-description").css({
                clip: "auto",
                position: "relative"
            }), t(".site-title a, .site-description").css({color: i}))
        })
    })
}(jQuery);