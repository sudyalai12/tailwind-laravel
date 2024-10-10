import $ from "jquery";
window.$ = window.jQuery = $;

$(function () {
    console.log("Jquery is loaded");

    // Header
    $("#mobile-menu-button").click(function () {
        $("#mobile-menu").toggleClass("!translate-x-0");
        $(this).find("svg").toggleClass("!hidden");
    });

    $("#mobile-products-button").click(function () {
        $("#mobile-products-menu").toggleClass("hidden");
        $(this)
            .find("span.material-symbols-outlined")
            .toggleClass("transform rotate-0");
    });

    $("#mobile-applications-button").click(function () {
        $("#mobile-applications-menu").toggleClass("hidden");
        $(this)
            .find("span.material-symbols-outlined")
            .toggleClass("transform rotate-0");
    });

    const slides = $("#carousel-slides .flex-shrink-0");
    const totalSlides = slides.length;
    let currentIndex = 0;
    let slideInterval;

    // Initialize carousel
    function showSlide(index) {
        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }
        $("#carousel-slides").css(
            "transform",
            "translateX(" + -currentIndex * 100 + "%)"
        );
        updateIndicators();
    }

    // Update active indicator
    function updateIndicators() {
        $(".indicator").removeClass("bg-gray-800").addClass("bg-gray-300");
        $(".indicator")
            .eq(currentIndex)
            .removeClass("bg-gray-300")
            .addClass("bg-gray-800");
    }

    // Previous Slide
    $("#prev-button").click(function () {
        showSlide(currentIndex - 1);
        resetInterval();
    });

    // Next Slide
    $("#next-button").click(function () {
        showSlide(currentIndex + 1);
        resetInterval();
    });

    // Indicator Click
    $(".indicator").click(function () {
        const index = $(this).data("slide");
        showSlide(index);
        resetInterval();
    });

    // Automatic Sliding
    function startInterval() {
        slideInterval = setInterval(function () {
            showSlide(currentIndex + 1);
        }, 3000); // Change slide every 3 seconds
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startInterval();
    }

    // Pause on hover
    $("#carousel-slides").on({
        mouseenter: () => clearInterval(slideInterval),
        mouseleave: startInterval,
    });

    // Initialize
    showSlide(currentIndex);
    startInterval();

    $(document).ready(function () {
        $("#carousel-slides .slide").hide();
        $("#carousel-slides .slide:first-of-type").fadeIn(1000);

        setInterval(function () {
            $("#carousel-slides .slide:first-of-type").fadeOut(
                1000,
                function () {
                    $(this).appendTo($("#carousel-slides"));
                    $("#carousel-slides .slide:first-of-type").fadeIn(1000);
                }
            );
        }, 7000);
    });

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    $(".prev").click(function () {
        plusSlides(-1);
    });

    $(".next").click(function () {
        plusSlides(1);
    });

    function plusSlides(n) {
        showSlides((slideIndex += n));
    }

    $(".thumbnail-item").click(function () {
        const index = $(this).index();
        showSlides(index + 1);
        $(".thumbnail-item").removeClass("active");
        $(this).addClass("active");
    });

    function showSlides(n) {
        const slides = $(".slideshow-item");
        const dots = $(".thumbnail-item");
        slideIndex = n > slides.length ? 1 : n < 1 ? slides.length : n;
        slides
            .hide()
            .eq(slideIndex - 1)
            .show();
        dots.css("opacity", 0.5)
            .eq(slideIndex - 1)
            .css("opacity", 1);
    }

    // Event listener for the tabs
    $(".tab").on("click", function (e) {
        e.preventDefault();
        const tabId = $(this).attr("href");
        $(".tab-content").not(tabId).hide().end().filter(tabId).fadeIn();
        $(".tab")
            .removeClass("text-white bg-gray-700")
            .filter(this)
            .addClass("text-white bg-gray-700");
    });

    /*
    $(".tab").on("click", function (e) {
        e.preventDefault();
        const tab = $(this).attr("href");
        $(".tab-content[id]").not(tab).hide();
        $(".tab").removeClass("text-white bg-gray-700");
        $(this).addClass("text-white bg-gray-700");
        $(tab).fadeIn();
    });
    */
});
