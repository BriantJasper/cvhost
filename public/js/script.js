AOS.init();

// Owl Carousel
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        margin: 10,
        loop: false,
        autoWidth: true,
    });
});

// Scroll Navbar Change
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const headerElements = document.querySelectorAll(".header-elements");
    const navbarNav = document.querySelector(".navbar-nav");
    if (window.scrollY > 0) {
        navbar.classList.add("bg-scroll");
        headerElements.forEach((element) => {
            element.style.display = "none";
        });
        navbarNav.style.marginTop = "0"; // Adjust margin-top here
    } else {
        navbar.classList.remove("bg-scroll");
        headerElements.forEach((element) => {
            element.style.display = "block";
        });
        navbarNav.style.marginTop = "-15px"; // Set back to default margin-top value
    }
});

// Hamburger Button
function handleHamburgerClick() {
    const navbar = document.querySelector(".navbar");
    if (navbar.classList.contains("bg-grey")) {
        navbar.classList.remove("bg-grey");
    } else {
        navbar.classList.add("bg-grey");
    }
}

const hamburgerButton = document.querySelector(".navbar-toggler");
hamburgerButton.addEventListener("click", handleHamburgerClick);

// Scroll to Top button

var scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (window.scrollY > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

scrollToTopBtn.addEventListener("click", function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

// Product Page Category Filter Using Isotope
var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    layoutMode: "fitRows",
});

$(".category-filter button").on("click", function () {
    var value = $(this).attr("data-filter");
    console.log(value);
    $grid.isotope({
        filter: value,
    });
});
