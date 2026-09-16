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

/* GLASS EFFECT ON BOXES */
if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {

    document.querySelectorAll('.section-about__box').forEach((card) => {

        card.addEventListener('mousemove', (e) => {

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const percentX = x / rect.width;
            const percentY = y / rect.height;

            const maxTilt = 10;

            const rotateX = (0.5 - percentY) * maxTilt * 2;
            const rotateY = (percentX - 0.5) * maxTilt * 2;

            card.style.transform = `
                perspective(1000px)
                rotateX(${rotateX}deg)
                rotateY(${rotateY}deg)
                scale(1.02)
            `;

            card.style.setProperty(
                '--mouse-x',
                `${percentX * 100}%`
            );

            card.style.setProperty(
                '--mouse-y',
                `${percentY * 100}%`
            );
        });

        card.addEventListener('mouseleave', () => {

            card.style.transform = `
                perspective(1000px)
                rotateX(0deg)
                rotateY(0deg)
                scale(1)
            `;

            card.style.setProperty('--mouse-x', '50%');
            card.style.setProperty('--mouse-y', '50%');
        });

    });

}