<?php require_once('include/header.php') ?>
   <!-- Start of Main -->
   <main class="main">
      <!-- Register section -->
      <section class="section section_hybrid">
         <div class="container">
            <div class="section__wrapper">
               <div class="section__heading">
                  <h1 class="section__title">Вход в личный кабинет</h1>
               </div>
               <div class="section__content">
                  <div class="register">
                     <img src="assets/images/section-img/register.png" alt="" class="register__img">
                     <form method="post" action="" class="register__form">
                        <input name="name" class="input" placeholder="ФИО" type="text" require>
                        <input name="phone" class="input" placeholder="Телефон" type="tel" id="phone" require>
                        <input name="email" class="input" placeholder="Email" type="email" require>
                        <input type="password" name="password" class="input" placeholder="Пароль" require>
                        <input type="password" name="password_repeat" class="input" placeholder="Повторите пароль" require>
                        <select class="select" name="user_type" id="" require>
                           <option class="option" value="">Исполнитель</option>
                           <option class="option" value="">Заказчик</option>
                        </select>
                        <button class="btn">Создать аккаунт</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
<?php require_once('include/footer.php') ?>