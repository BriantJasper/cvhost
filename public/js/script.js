AOS.init();

// Owl Carousel
$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
});

$(".owl-carousel").owlCarousel({
    margin: 10,
    loop: true,
    autoWidth: true,
    items: 4,
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

// Product Page Category Filter
const btns = document.querySelectorAll(".buttons button");
const products = document.querySelectorAll(".product-filter .product");

console.log(products[0]);

for (let i = 1; i < btns.length; i++) {
    btns[i].addEventListener("click", filterProducts);
}

function secActiveBtn(e) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });
    e.target.classList.add("active");
}

// function filterProducts(e) {
//     setActiveBtn(e);

//     products.forEach((product) => {
//         const product = product.dataset;
//     });
// }
