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
      <section class="section section__catalog">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h1 class="section__title">Каталог услуг</h1>
                  <form method="post" action="" class="search-form">
                     <input name="search" class="search-form__input" placeholder="Поиск" type="text">
                     <button class="search-form__btn"><ion-icon name="arrow-forward-outline"></ion-icon></button>
                  </form>
               </div>
               <div class="services__line"></div>
               <div class="section__content">
                  <div class="services">
                     <div class="services__catalog">
                        <button class="btn">Психология</button>
                        <button class="btn btn_grey">Ремонт авто</button>
                        <button class="btn btn_grey">Уборка</button>
                        <button class="btn btn_grey">Перевозка вещей</button>
                        <button class="btn btn_grey">Тренировки</button>
                     </div>
                     <div class="services__list">
                        <a href="#" class="btn btn_grey">Психолог</a>
                        <a href="#" class="btn btn_grey">Психотерапевт</a>
                        <a href="#" class="btn btn_grey">Психиатр</a>
                        <a href="#" class="btn btn_grey">Клинический психолог</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>