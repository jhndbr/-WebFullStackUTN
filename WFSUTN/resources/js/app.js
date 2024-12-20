import './bootstrap';

import Alpine from 'alpinejs';

import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide').mount();
});
window.Alpine = Alpine;

Alpine.start();
