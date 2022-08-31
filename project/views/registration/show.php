<?php
?>


<form action="" method="POST">
    <label>имя</label>
    <input name="name" type="text"> <br>
<!--    --><?//= $err['name'] ?>
    <label>фамилия</label>
    <input name="soname" type="text"> <br>
<!--    --><?//= $err['soname'] ?>
    <label>телефон</label>
    <input name="phone" type="tel"> <br>
<!--    --><?//= $err['phone'] ?>
    <label>e-mail</label>
    <input name="email" type="email"> <br>
<!--    --><?//= $err['email'] ?>
    <label>логин</label>
    <input name="login" type="text"> <br>
<!--    --><?//= $err['login'] ?>
    <label>пароль</label>
    <input type="password" name="password"><br>
<!--    --><?//= $err['password'] ?>
    <label>повторите пароль</label>
    <input type="password" name="confirm">
    <button type="submit" class="" name="submit">Отправить</button>
</form>




