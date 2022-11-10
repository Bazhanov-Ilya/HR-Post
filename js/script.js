window.addEventListener('scroll', function() {
    const header = this.document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

function toggleMenu() {
    const memuToggle = document.querySelector('.menuToggle.active');
    const blure = document.querySelector('.allblur');
    const logo = document.querySelector('.logo');
    const nav = document.querySelector('.nav');
    memuToggle.classList.toggle('on');
    logo.classList.toggle('active');
    nav.classList.toggle('active');
    blure.classList.toggle('active');
};
