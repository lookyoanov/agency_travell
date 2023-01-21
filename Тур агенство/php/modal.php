<div class="modal fade" id="exampleModalV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Логин</label>
			    <input type="" class="form-control" id="" aria-describedby="emailHelp" name="loginA">
			    <div id="emailHelp" class="form-text">Авторизируйтесь используя свой логин</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Пароль</label>
			    <input type="password" class="form-control" id=""name="passwordA">
			    <div id="emailHelp" class="form-text">Введите свой пароль</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Войти</button>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<?php
  require 'php/avtorisation.php';
?>
<!--Модальное окно с регистрацией-->
<div class="modal fade" id="exampleModalZ" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Имя</label>
			    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="nameM">
			    <div id="emailHelp" class="form-text">Введите ваше имя</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Фамилия</label>
			    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="surname">
			    <div id="emailHelp" class="form-text">Введите вашу фамилию</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Логин</label>
			    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="login">
			    <div id="emailHelp" class="form-text">Придумайте логин</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Почта</label>
			    <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email">
			    <div id="emailHelp" class="form-text">Привяжите свою почту</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Пароль</label>
			    <input type="password" class="form-control" id="" name="password_one">
			    <div id="emailHelp" class="form-text">Введите свой пароль</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Пароль</label>
			    <input type="password" class="form-control" id="" name="password">
			    <div id="emailHelp" class="form-text">Повторите свой пароль</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<?php
  require 'add.php';
?>