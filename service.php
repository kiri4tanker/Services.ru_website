<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Breadcrumbs -->
      <section class="breadcrumbs">
         <div class="container">
            <div class="breadcrumbs__content">
               <a href="index.php" class="breadcrumbs__link">Главная</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <a href="services.php" class="breadcrumbs__link">Услуги</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <a href="services.php" class="breadcrumbs__link">Психология</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <a href="services.php" class="breadcrumbs__link">Психолог</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <span class="breadcrumbs__link breadcrumbs__link_static">Суетолог</span>
            </div>
         </div>
      </section>
      <section class="section">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading_center">
                  <h1 class="section__title">Суетолог</h1>
               </div>
               <div class="service-single">
                  <img src="assets/images/service/img-service-avatar.png" alt="service-img" class="service-single__img">
                  <div class="service-single__text">
                     <h2 class="service-single__name">Татьяна Маяковская</h2>
                     <p class="service-single__city text-muted">Калининград</p>
                     <p class="service-single__description">Каждый из нас проходит через сложные периоды в жизни. Иногда они затягиваются, но бывает, что мы успокаиваем себя логическими доводами или надеждой. А что делать, если раздражение, страх, неуверенность в себе, в будущем или окружающих не отступает ни на шаг? Это именно тот период, когда лучше всего обратиться к психологу. Помощь опытного психолога поможет вам: найти решение в сложной ситуации (детско-родительские, супружеские, межличностные отношения в коллективе и т.д.)</p>
                     <div class="inline">
                        <button class="btn">Телефон</button>
                        <button class="btn">Чат</button>
                     </div>
                  </div>
               </div>
               <div class="service-single__bottom">
                  <!-- Slider main container -->
                  <div class="swiper service-swiper">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                           <div class="serevice-single__slider">
                              <img src="/assets/images/service/slide-1.png" alt="slider" class="service__slider__img">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="serevice-single__slider">
                              <img src="/assets/images/service/slide-2.png" alt="slider" class="service__slider__img">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="serevice-single__slider">
                              <img src="/assets/images/service/slide-3.png" alt="slider" class="service__slider__img">      
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="serevice-single__slider">
                              <img src="/assets/images/service/slide-4.png" alt="slider" class="service__slider__img">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- If we need pagination -->
                  <div class="swiper-custom-pagination"></div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>