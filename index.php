<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Search section -->
      <section style="background-image: url(/assets/images/bg/search-bg.jpg)" class="section section_secondary section_background">
         <div class="container">    
            <div class="section__wrapper">
               <div class="section__heading">
                  <h1 class="section__title">Для любой задачи есть специалист</h2>
                  <p class="section__subtitle">Поможем найти надежного исполнителя для любых задач.</p>
               </div>
               <div class="section__content">
                  <form method="post" action="" class="search-form">
                     <input name="search" class="search-form__input" placeholder="Поиск" type="text">
                     <button class="search-form__btn"><ion-icon name="arrow-forward-outline"></ion-icon></button>
                  </form>
               </div>
            </div>
         </div>     
      </section>
      <!-- Services section -->
      <section class="section section_primary">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h2 class="section__title">Наши услуги</h2>
                  <a href="services.php" class="btn">Посмотреть все</a>
               </div>
               <div class="section__content">
                  <div class="services">
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/1.png" alt="" class="service__img">
                           <p class="service__text">Уборка</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/2.png" alt="" class="service__img">
                           <p class="service__text">Электрика</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/3.png" alt="" class="service__img">
                           <p class="service__text">Тренировки</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/4.png" alt="" class="service__img">
                           <p class="service__text">Перевозка вещей</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/5.png" alt="" class="service__img">
                           <p class="service__text">Юристы</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/6.png" alt="" class="service__img">
                           <p class="service__text">Дизайнеры</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/7.png" alt="" class="service__img">
                           <p class="service__text">Репетиторство</p>
                        </a>
                     </div>
                     <div class="service">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/8.png" alt="" class="service__img">
                           <p class="service__text">Психологи</p>
                        </a>
                     </div>
                  </div> 
               </div>
            </div>
         </div>    
      </section>
      <!-- About us section -->
      <section class="section section_secondary">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h2 class="section__title">О сервисе</h2>
               </div>
               <div class="section__content">
                  <div class="about-us">
                     <div class="about-us__content">
                        <p class="about-us__text">Услуги.ру — это сервис, который помогает клиентам и специалистам встретиться. Клиенты находят здесь профессионалов для решения любых задач — репетиторов, автоинструкторов, сантехников, парикмахеров.<br>А специалисты, в свою очередь, быстро находят клиентов, ведь с помощью сайта можно в один клик организовать свой бизнес на дому без вложений.</p>
                        <a href="about-us.php" class="btn">Читать далее</a>
                     </div>
                     <div class="about-us__img">
                        <img src="/assets/images/section-img/about-us.png" alt="about-us-img">
                     </div>
                  </div>
               </div> 
            </div>
         </div>
      </section>
      <!-- Stats section -->
      <section class="section section_primary">
         <div class="container">
            <div class="section__wrapper">
            <div class="section__heading">
               <h2 class="section__title">Наша статистика</h2>
               <p class="section__subtitle">За время работы с заказчиками и исполнителями</p>
            </div>
            <div class="section__content">
               <div class="stats">
                  <div class="stats__item">
                     <h3 class="stats__number">5928</h3>
                     <p class="stats__text">Пользователей с нами</p>
                  </div>
                  <div class="stats__item">
                     <h3 class="stats__number">3638</h3>
                     <p class="stats__text">Довольных пользователей</p>
                  </div>
                  <div class="stats__item">
                     <h3 class="stats__number">847</h3>
                     <p class="stats__text">Специалистов на сайте</p>
                  </div>
                  <div class="stats__item">
                     <h3 class="stats__number">9842</h3>
                     <p class="stats__text">Выполнено заказов</p>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </section>
      <!-- Reasons section -->
      <section class="section section_secondary">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h2 class="section__title">Причины выбрать нас</h2>
               </div>
            </div>
            <div class="section__content">
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
      </section>
      <!-- Popular services section -->
      <section class="section section_primary">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h2 class="section__title">Популярные услуги</h2>
                  <a href="services.php" class="btn">Посмотреть все</a>
               </div>
               <div class="section__content">
                  <div class="services">
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/1.png" alt="" class="service__img">
                           <p class="service__text">Уборка</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/9.png" alt="" class="service__img">
                           <p class="service__text">Электрика</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/10.png" alt="" class="service__img">
                           <p class="service__text">Тренировки</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/11.png" alt="" class="service__img">
                           <p class="service__text">Перевозка вещей</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/12.png" alt="" class="service__img">
                           <p class="service__text">Юристы</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/13.png" alt="" class="service__img">
                           <p class="service__text">Дизайнеры</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/14.png" alt="" class="service__img">
                           <p class="service__text">Репетиторство</p>
                        </a>
                     </div>
                     <div class="service service_popular">
                        <a href="#" class="service__card">
                           <img src="assets/images/services/15.png" alt="" class="service__img">
                           <p class="service__text">Психологи</p>
                        </a>
                     </div>
                  </div> 
               </div>
            </div>
         </div>    
      </section>
      <!-- Feedback section -->
      <section class="section section_secondary">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h2 class="section__title">Мы здесь, чтобы помочь</h2>
               </div>
               <div class="section__content">
                  <div class="feedback">
                     <img src="/assets/images/section-img/feedback.png" alt="" class="feedback__img">
                     <form method="post" action="" class="feedback__form">
                        <input name="name" class="input" placeholder="Имя" type="text">
                        <input name="company" class="input" placeholder="Ваша компания" type="text">
                        <input name="theme" class="input" placeholder="Тема" type="text">
                        <input name="email" class="input" placeholder="Email" type="email">
                        <textarea name="comment" placeholder="Сообщение" class="input"></textarea>
                        <button class="btn">Отправить</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Maps section -->
      <section class="section section_primary">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h2 class="section__title">Где используют наш сервис</h2>
                  <p class="section__subtitle">Наш сервис используют по всей России, Вы можете найти нужного вам специалиста в любом городе. На данной странице вы узнаете, где найти хорошего специалиста в вашем городе, его контакты и расценки.
                     Мы помогаем найти специалиста в городе и найти ему замену в случае необходимости.
                     Срочный вызов специалиста на дом – это отличная возможность быстро решить возникшую проблему и не ожидать долгие часы, когда приедет ремонтная бригада.</p>
               </div>
               <div class="section__content">
                  <img src="/assets/images/section-img/map.png" alt="map-img">
               </div>
            </div>
         </div>      
      </section>
   </main>
<?php require_once('include/footer.php') ?>