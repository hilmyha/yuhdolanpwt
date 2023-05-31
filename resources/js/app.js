import "./bootstrap";
import "flowbite";
import "../../node_modules/jquery/dist/jquery";

// navbar scroll effect
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $(".navbar").addClass("navbar-scroll");
        $(".navbar").addClass("transition");
    } else {
        $(".navbar").removeClass("navbar-scroll");
        $(".navbar").addClass("transition");
    }
});

