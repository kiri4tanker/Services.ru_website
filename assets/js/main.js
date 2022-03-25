// reasons slider
// Вызвыай код только после того, как загрузился DOM. Гугли "event DOMContentLoaded"
// Код оборачивай в функции - initSlider, initHamburger, иначе он быстро превратится в хаос

const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  
  slidesPerView: 4,
  spaceBetween: 20,

  grabCursor: true,

  pagination: {
    el: ".swiper-custom-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '"> </span>';
    }
  },
  breakpoints: {
    0: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 3
    },
    992: {
      slidesPerView: 4
    }
  }
 });

// mobile menu

const hamburger = document.querySelector('.header .hamburger');
const headerBottom = document.querySelector('.header__bottom');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  headerBottom.classList.toggle('active');
});

// micromodal

MicroModal.init();