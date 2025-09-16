const menuBtn = document.querySelector('.menu__btn');
const menu = document.querySelector('.menu');

menuBtn.addEventListener('click', ()=> {
    menu.classList.toggle('menu--open');
    menuBtn.classList.toggle('menu--open');
});

$(document).ready(function () {
    const slider = $("#carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 2,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            992: {
                items: 2,
                nav: false
            },
            1500: {
                items: 2,
                nav: true
            }
            
        }
    });
});

$(document).ready(function () {
    const slider = $("#products").owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        items: 4,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            620: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false
            },
            1200: {
                items: 4,
                nav: true
            }
            
        }
    });
});