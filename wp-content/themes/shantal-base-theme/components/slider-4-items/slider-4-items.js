import Swiper, { Navigation, Pagination } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import './slider-4-items-styles.scss'

let sliderContainer = '.sh-slider'
let sliderSelector = document.querySelector(sliderContainer);

let slideSetup = {
    'slidesPerView': typeof sliderSelector.dataset.slides != "undefined" ? sliderSelector.dataset.slides : 2
}

new Swiper(sliderContainer, {
    slidesPerView: 1,
    spaceBetween: 40,
    modules: [Navigation, Pagination],
    navigation: {
        nextEl: '.sh-slider-next',
        prevEl: '.sh-slider-prev',
    },
    breakpoints: {
        768:{
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024:{
            slidesPerView: slideSetup.slidesPerView,
            spaceBetween: 40,
        }

    }
});

