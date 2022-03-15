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
               <span class="breadcrumbs__link breadcrumbs__link_static">Психолог</span>
            </div>
         </div>
      </section>
      <!-- Catalog section -->
      <section class="section">
         <div class="container">
            <div class="section__wrapper">
               <div class="filter">
                  <h1 class="filter__title">Психиатор</h1>
                  <form method="post" action="" class="search-form">
                     <input name="search" class="search-form__input" placeholder="Поиск" type="text">
                     <button class="search-form__btn"><ion-icon name="arrow-forward-outline"></ion-icon></button>
                  </form>
                  <div class="filter__line"></div>
                  <div class="filter__catalog">
                     <div class="list-group">
                        <button class="list-group__item">
                           <div class="checkbox checkbox_full">
                              <input class="checkbox__input" type="checkbox" id="checkbox-1" name="checkbox-1">
                              <label for="checkbox-1" class="checkbox__text">Выезд</label>
                              <label class="checkbox__box" for="checkbox-1"></label>
                           </div>
                        </button>
                        <button class="list-group__item">
                           <div class="checkbox checkbox_full">
                              <input class="checkbox__input" type="checkbox" id="checkbox-2" name="checkbox-2">
                              <label for="checkbox-2" class="checkbox__text">Частное лицо</label>
                              <label class="checkbox__box" for="checkbox-2"></label>
                           </div>
                        </button>
                        <button class="list-group__item">
                           <div class="checkbox checkbox_full">
                              <input class="checkbox__input" type="checkbox" id="checkbox-3" name="checkbox-3">
                              <label for="checkbox-3" class="checkbox__text">Организация</label>
                              <label class="checkbox__box" for="checkbox-3"></label>
                           </div>
                        </button>
                        <button class="list-group__item">
                           <div class="checkbox checkbox_full">
                              <input class="checkbox__input" type="checkbox" id="checkbox-4" name="checkbox-4">
                              <label for="checkbox-4" class="checkbox__text">Работает сейчас</label>
                              <label class="checkbox__box" for="checkbox-4"></label>
                           </div>
                        </button>
                     </div>
                  </div>
                  <div class="filter__content">
                     <div class="orders" style="--items: 1;">
                        <a href="#" class="order">
                           <img src="assets/images/profile/services/1.png" alt="service-img" class="order__img">
                           <div class="order__text">
                              <strong class="order__name">Психолог Вероника Степанова</strong>
                              <p class="order__city text-muted">Калининград</p>
                           </div>
                        </a>
                        <a href="#" class="order">
                           <img src="assets/images/profile/services/1.png" alt="service-img" class="order__img">
                           <div class="order__text">
                              <strong class="order__name">Психолог Вероника Степанова</strong>
                              <p class="order__city text-muted">Калининград</p>
                           </div>
                        </a>
                        <a href="#" class="order">
                           <img src="assets/images/profile/services/1.png" alt="service-img" class="order__img">
                           <div class="order__text">
                              <strong class="order__name">Психолог Вероника Степанова</strong>
                              <p class="order__city text-muted">Калининград</p>
                           </div>
                        </a>
                        <a href="#" class="order">
                           <img src="assets/images/profile/services/1.png" alt="service-img" class="order__img">
                           <div class="order__text">
                              <strong class="order__name">Психолог Вероника Степанова</strong>
                              <p class="order__city text-muted">Калининград</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>