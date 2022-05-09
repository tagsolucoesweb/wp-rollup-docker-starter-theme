import Swiper, { Autoplay } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

import './hero-rounded-slider-styles.scss';

let sliderContainer = '.sh-slider-hero-rounded'

new Swiper(sliderContainer, {
    modules: [Autoplay],
    slidesPerView: 1,
    rewind: true,
    autoplay: {
        delay: 5000,
    }
});