import MicroModal from 'micromodal';
import initSwiper from './modules/swiper'
import initHamburger from './modules/hamburger';
document.addEventListener('DOMContentLoaded', () => {
  // swiper
  initSwiper();
  // mobile menu
  initHamburger();
  // micromodal
  MicroModal.init();
})