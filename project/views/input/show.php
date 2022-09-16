<?php
if(isset($_SESSION['err']))
{
    $err=$_SESSION['err'];
    echo $err;
}
//echo "<br>".password_hash('12345', PASSWORD_DEFAULT)."<br>";
//echo password_hash('12345', PASSWORD_DEFAULT)."<br>";
//echo password_hash('12345', PASSWORD_DEFAULT)."<br>";
//if (password_verify('123', '$2y$10$nPm8IWRzjFzVlmvgW55p/O3RXzIVbZ2dIVJqD80ahPUqT39rQOEva')) {
//    echo 'хеш от этого пароля';
//} else {
//    echo 'хеш не от этого пароля';
//}
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

