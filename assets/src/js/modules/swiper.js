import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination} from 'swiper/modules';


Swiper.use([Navigation, Pagination, Autoplay, EffectFade]);

let swiper = new Swiper(".banner_one", {

    loop: true,
    navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
    },
    autoplay: {
        delay: 3000,
    },
});
let swiper2 = new Swiper(".banner_two", {
    loop: true,
    effect: "fade",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 1000,
    },
});
