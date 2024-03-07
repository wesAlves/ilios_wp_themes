// Default theme
import '@splidejs/splide/css';
import Splide from '@splidejs/splide';

new Splide(  '.splide', {
    type    : 'loop',
    autoplay: 'true',
    perPage : 1,
}  ).mount();