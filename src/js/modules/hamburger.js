export default function initHamburger (){
   const hamburger = document.querySelector('.header .hamburger');
   const headerBottom = document.querySelector('.header__bottom');

   hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      headerBottom.classList.toggle('active');
   })
}