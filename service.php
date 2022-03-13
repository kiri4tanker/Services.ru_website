<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Breadcrumbs -->
      <section class="breadcrumbs">
         <div class="container">
            <div class="breadcrumbs__content">
               <a href="index.php" class="breadcrumbs__link">Главная</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <a href="index.php" class="breadcrumbs__link">Услуги</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <a href="index.php" class="breadcrumbs__link">Психология</a>
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
                  <div class="service-singl__text">
                     <h2 class="service-single__name">Татьяна Маяковская</h2>
                     <p class="service-single__city text-muted">Калининград</p>
                     <p class="service-single__secription">Каждый из нас проходит через сложные периоды в жизни. Иногда они затягиваются, но бывает, что мы успокаиваем себя логическими доводами или надеждой. А что делать, если раздражение, страх, неуверенность в себе, в будущем или окружающих не отступает ни на шаг? Это именно тот период, когда лучше всего обратиться к психологу. Помощь опытного психолога поможет вам: найти решение в сложной ситуации (детско-родительские, супружеские, межличностные отношения в коллективе и т.д.) понять свои интересы, способности и ожидания, что поможет избежать разочарования; открыть творческий потенциал, поднять самооценку, преодолеть чувство одиночества.</p>
                     <button class="btn">Телефон</button>
                     <button class="btn">Чат</button>
                  </div>
                  <div class="service-single__botoom">
                     <!-- Slider main container -->
                     <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                           <!-- Slides -->
                           <div class="swiper-slide">
                              <div class="reason">
                                 <img src="/assets/images/reason/reason-1.png" alt="" class="reason__img">
                                 <strong class="reason__title">Ответственность</strong>
                                 <small class="reason__text">Проверяем каждый отзыв. Если заказ спорный, мы узнаем подробности.</small>
                              </div>
                           </div>
                           <div class="swiper-slide">
                           <div class="reason">
                              <img src="/assets/images/reason/reason-2.png" alt="" class="reason__img">
                              <strong class="reason__title">Продуктивность</strong>
                              <small class="reason__text">Находим специалистов, которые точно готовы взяться за дело.</small>
                              </div>
                           </div>
                           <div class="swiper-slide">
                           <div class="reason">
                              <img src="/assets/images/reason/reason-3.png" alt="" class="reason__img">
                              <strong class="reason__title">Качество</strong>
                              <small class="reason__text">В рейтинге мы учитываем опыт специалиста, качество работы, культуру общения и пунктуальность.</small>
                           </div>
                           </div>
                           <div class="swiper-slide">
                           <div class="reason">
                              <img src="/assets/images/reason/reason-4.png" alt="" class="reason__img">
                              <strong class="reason__title">Скорость</strong>
                              <small class="reason__text">Предлагаем специалистов, которые соответствуют вашему заказу - выбирайте подходящего!</small>
                           </div>
                           </div>
                        </div>
                     </div>
                     <!-- If we need pagination -->
                     <div class="swiper-custom-pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>