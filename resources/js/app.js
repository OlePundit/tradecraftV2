import './bootstrap';
import Swiper from 'swiper';
import 'swiper/css'; // Import Swiper styles

document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.clients-slider', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    slidesPerView: 5,
    spaceBetween: 30,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
  });
});
