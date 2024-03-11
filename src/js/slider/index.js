// Default theme
import '@splidejs/splide/css';
import Splide from '@splidejs/splide';

const homePath = window.location

if (`${homePath.origin}/` === homePath.href) {
    new Splide('.splide', {
        type: 'loop',
        autoplay: 'true',
        perPage: 1,
    }).mount();

}
