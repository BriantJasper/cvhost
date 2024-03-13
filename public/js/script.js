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

// Services popup Section
