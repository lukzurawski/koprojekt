/* Lukante theme JS */
jQuery(document).ready(function ($) {

    const logo = $(".navbar img");
    const navbar = $("#main-nav");

    let scrolled = false;

    $(window).on("scroll", function () {

        if ($(window).scrollTop() > 1 && !scrolled) {

            scrolled = true;

            navbar
                .addClass("active-header")

        } else if ($(window).scrollTop() <= 1 && scrolled) {

            scrolled = false;

            navbar
                .removeClass("active-header")

        }

    });

});

document.addEventListener('DOMContentLoaded', () => {

    const navbar = document.getElementById('navbarNavDropdown');
    const toggler = document.querySelector('.navbar-toggler');

    if (!navbar || !toggler) return;

    navbar.addEventListener('click', (e) => {

        const link = e.target.closest('.nav-link');

        if (!link) return;

        if (window.innerWidth < 768 && navbar.classList.contains('show')) {
            toggler.click();
        }

    });

});


