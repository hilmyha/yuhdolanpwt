import "./bootstrap";
import "flowbite";
import Datepicker from 'flowbite-datepicker/Datepicker';
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

// const datepickerEl = document.getElementById('datepickerBooking');
// new Datepicker(datepickerEl, {
    
// }); 

const nama = document.querySelector('#nama')
const slug = document.querySelector('#slug')

nama.addEventListener('change', function() {
    fetch('/dashboard/destinasi/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
})

