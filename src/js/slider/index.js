// Default theme
import '@splidejs/splide/css';
import Splide from '@splidejs/splide';

const homePath = window.location

const current = homePath.href.split("#");
const origin = `${homePath.origin}/`;

console.log(origin, current);

if (origin === current[0]) {
    new Splide('.splide', {
        type: 'loop',
        autoplay: 'true',
        perPage: 1,
    }).mount();

}
