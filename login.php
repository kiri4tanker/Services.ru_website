<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Login section -->
      <section class="section section_hybrid">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h1 class="section__title">Вход в личный кабинет</h1>
               </div>
               <div class="section__content">
                  <div class="login">
                     <img src="assets/images/section-img/login.png" alt="" class="login__img">
                     <form method="post" action="" class="login__form">
                        <input name="email" class="input" placeholder="Email" type="email">
                        <input type="password" name="password" class="input" placeholder="Пароль" id="">
                        <select class="select" name="user_type" id="">
                           <option class="option" value="">Исполнитель</option>
                           <option class="option" value="">Заказчик</option>
                        </select>
                        <button class="btn">Войти</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>