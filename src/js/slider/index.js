// Default theme
import '@splidejs/splide/css';
import Splide from '@splidejs/splide';

window.onload = () => {
    const hasSlider = document.querySelector(".splide");

    if(!!hasSlider){

        new Splide('.splide', {
            type: 'loop',
            autoplay: 'true',
            perPage: 1,
        }).mount();

    }
}


