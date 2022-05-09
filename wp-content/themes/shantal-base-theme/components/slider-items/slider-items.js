import Swiper, { Navigation, Pagination } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import './slider-items-styles.scss'

let sliders = document.querySelectorAll('.sh-slider-inner');

sliders.forEach(sliderWrap => {
    
    let slider = sliderWrap.querySelector('.swiper');
    let slideNext = sliderWrap.querySelector('.sh-slider-next');
    let slidePrev = sliderWrap.querySelector('.sh-slider-prev');

    let slideSetup = {
        'slidesPerView': typeof slider.dataset.slides != "undefined" ? slider.dataset.slides : 2
    }
    
    new Swiper(slider, {
        slidesPerView: 1,
        spaceBetween: 40,
        modules: [Navigation, Pagination],
        navigation: {
            nextEl: slideNext,
            prevEl: slidePrev,
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
    
});



