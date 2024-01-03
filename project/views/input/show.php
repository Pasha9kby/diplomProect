<?php
if(isset($_SESSION['inputErr']))
{
    $err=$_SESSION['inputErr'];
    echo $err;
}
unset($_SESSION['err']);


?>

<form action="" method="POST">
    <div>
        <label>email</label>
        <input name="email" type="email">
    </div>
     <div>
         <label>пароль</label>
         <input name="password" type="password">
     </div>
    <button type="submit" class="submit" name="submit">Войти</button>
</form>

<a href="/registration/">регистрация</a>

проверка


