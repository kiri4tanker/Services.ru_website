<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Breadcrumbs -->
      <section class="breadcrumbs">
         <div class="container">
            <div class="breadcrumbs__content">
               <a href="index.php" class="breadcrumbs__link">Главная</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <span class="breadcrumbs__link breadcrumbs__link_static">Услуги</span>
            </div>
         </div>
      </section>
      <!-- Catalog section -->
      <section class="section">
         <div class="container">
            <div class="section__wrapper">
               <div class="service-catalog">
                  <h1 class="service-catalog__title">Каталог услуг</h1>
                  <form method="post" action="" class="search-form">
                     <input name="search" class="search-form__input" placeholder="Поиск" type="text">
                     <button class="search-form__btn"><ion-icon name="arrow-forward-outline"></ion-icon></button>
                  </form>
                  <div class="service-catalog__line"></div>
                  <div class="service-catalog__services">
                     <button class="catalog-item catalog-item_active">Психология</button>
                     <button class="catalog-item">Ремонт авто</button>
                     <button class="catalog-item">Уборка</button>
                     <button class="catalog-item">Перевозка вещей</button>
                     <button class="catalog-item">Тренировки</button>
                  </div>
                  <div class="service-catalog__list">
                     <a href="#" class="catalog-item">Психолог</a>
                     <a href="#" class="catalog-item">Психотерапевт</a>
                     <a href="#" class="catalog-item">Психиатр</a>
                     <a href="#" class="catalog-item">Клинический психолог</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>