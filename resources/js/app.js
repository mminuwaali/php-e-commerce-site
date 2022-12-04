// import './bootstrap';

const slideshow = document.querySelector('#slideshow');
const slideButtons = slideshow.querySelectorAll('[data-slideshow-count]');

slideButtons.forEach(btn => btn.addEventListener('click', ({ currentTarget: target }) => { slideshow.style.setProperty('--x', Number(target.getAttribute('data-slideshow-count'))) }));


