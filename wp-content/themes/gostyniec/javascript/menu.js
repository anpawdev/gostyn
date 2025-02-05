const header = document.querySelector('header');
const navWrapper = document.querySelector('.nav-wrapper');
const hideBlocks = document.querySelectorAll('.js-hide-scroll');

document.addEventListener('scroll', (event) => {
    var elmTop = window.scrollY;
    if (elmTop > 50) {
        header.classList.add("header--scroll");
        hideBlocks.forEach(item => {
            item.classList.add('hidden');
        });
        navWrapper.classList.remove('xl:items-start', 'xl:pt-[53px]');
    } else {
        header.classList.remove("header--scroll");
        hideBlocks.forEach(item => {
            item.classList.remove('hidden');
        });
        navWrapper.classList.add('xl:items-start', 'xl:pt-[53px]');
    }
});

const navToggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('nav');

navToggle.addEventListener('click', () => {
    nav.classList.toggle('expanded');
})


