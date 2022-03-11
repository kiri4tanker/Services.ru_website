<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Breadcrumbs -->
      <section class="breadcrumbs">
         <div class="container">
            <div class="breadcrumbs__content">
               <a href="index.php" class="breadcrumbs__link">Главная</a>
               <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
               <span class="breadcrumbs__link breadcrumbs__link_static">Личный кабинет</span>
            </div>
         </div>
      </section>
      <!-- Profile section -->
      <section class="section">
         <div class="container">
            <div class="section wrapper">
               <div class="profile">
                  <div class="profile__heading">
                     <img src="assets/images/profile/avatar/avatar.png" alt="avatar" class="profile_avatar">
                     <h2 class="profile__name">Анастасия Кубрак</h2>
                     <strong class="profile__city">Северск</strong>
                     <a href="tel:81000710007" class="profile__phone">+7 100 071-00-07</a>
                     <p class="profile__description text-muted">За время моей работы были выявлены основные источники финансирования, главные направления работы и причины, почему их аудитория держится столь длительное время.</p>
                  </div>
                  <div class="profile__line"></div>
                  <div class="profile__content">
                     <button class="btn">Мои заказы</button>
                     <button class="btn">Анкета</button>
                     <button class="btn">Настройки</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>