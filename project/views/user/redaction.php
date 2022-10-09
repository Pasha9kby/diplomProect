<?php
use Project\Klass\Get_age\Get_age;
use Project\Klass\Age_to_str\Age_to_str;
?>

<p>Данные пользователя</p>

<div class="topInfo">
    <div><a href="/user/main/<?=$userlist["id_client"]?>/">Личный кабинет</a></div>
    <div><?=$userlist["name_tip_clienta"]?></div>
    <div><?=$userlist["familia"]." ".$userlist["imy"]?><br> <?= (new Get_age())->get_age($userlist['date_of_birth']).(new Age_to_str())->agetostr((new Get_age())->get_age($userlist['date_of_birth']));?></div>
</div><br>

<div>
    <form action="" method="POST">
        <div>
            <label>фамилия</label>
            <input name="soname" type="text" <?=(isset($_POST['soname']))?'value='.$_POST['soname']:"placeholder='введите фамилию'"?>>
            <? if(isset($err['soname'])){echo $err['soname'];} ?>
        </div>
        <div>
            <label>имя</label>
            <input name="name" type="text" <?=(isset($_POST['name']))?'value='.$_POST['name']:"placeholder='введите имя'"?>>
            <? if(isset($err['name'])){echo $err['name'];} ?>
        </div>

        <div>
            <label>телефон</label>
            <input name="phone" type="tel" <?=(isset($_POST['phone']))?'value='.$_POST['phone']:"placeholder='+375291111111'"?>>
            <? if(isset($err['phone'])){echo $err['phone'];} ?>
        </div>
        <div>
            <label>e-mail</label>
            <input name="email" type="email" <?=(isset($_POST['email']))?'value='.$_POST['email']:"placeholder='введите email'"?>>
            <? if(isset($err['email'])){echo $err['email'];} ?>
        </div>
        <div>
            <label>Пол</label>
            <select name="sex" type="text" <?=(isset($_POST['sex']))?'value='.$_POST['sex']:""?>>
                <option></option>
                <option>М</option>
                <option>Ж</option>
            </select>
            <? if(isset($err['sex'])){echo $err['sex'];} ?>
        </div>
        <div>
            <label>Дата рождения</label>
            <input name="date_of_birth" type="date" <?=(isset($_POST['date_of_birth']))?'value='.$_POST['date_of_birth']:"placeholder='введите дату'"?>>
            <? if(isset($err['date_of_birth'])){echo $err['date_of_birth'];} ?>
        </div>
        <div>
            <label>пароль</label>
            <input type="password" name="password" <?=(isset($_POST['password']))?'value='.$_POST['password']:"placeholder='введите пароль'"?>>
            <? if(isset($err['password'])){echo $err['password'];} ?>
        </div>
        <div>
            <label>повторите пароль</label>
            <input type="password" name="confirm" <?=(isset($_POST['confirm']))?'value='.$_POST['confirm']:"placeholder='введите пароль'"?>>
            <? if(isset($err['confirm'])){echo $err['confirm'];} ?>
        </div>
        <button type="submit" class="submit" name="submit">Изменить</button>
    </form>
</div>
