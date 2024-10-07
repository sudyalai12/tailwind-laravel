import $ from "jquery";
window.$ = window.jQuery = $;

$(function () {
    console.log("Jquery is loaded");
    $("#mobile-menu-button").click(function () {
        $("#mobile-menu").toggleClass("hidden");
        $(this).find("span").toggleClass("!hidden");
    });
});
