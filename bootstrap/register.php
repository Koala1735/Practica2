<?php
  include ('tpl/header.php');
  include ('tpl/nav.php');
?>
  <main class = "flex">
  <h2>Регистрация</h2>
    <form action = "tpl/save_user.php" method = "post">
      <p>
        <label>Ваше имя:<br></label>
        <input name = "name" type ="text" size = "15" maxlength="15">
      </p>
      <p>
        <label>Ваш логин:<br></label>
        <input name ="login" type = "text" size = "15" maxlength="15">
      </p>
      <p>
        <label>Ваш пароль:<br></label>
        <input name ="pass" type = "password" size = "15" maxlength="15">
      </p>
      <p>
        <input type="submit" name="submit"value = "Зaрегистрироваться">
      </p>
    </form>
  </main>
<?php
  include ('tpl/footer.php');
?>
