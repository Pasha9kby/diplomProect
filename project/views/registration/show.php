<?php
if(isset($_SESSION['err']))
{
    $err=$_SESSION['err'];
}


?>


<form action="" method="POST">
    <div>
        <label>имя</label>
        <input name="name" type="text" <?=(isset($_POST['name']))?'value='.$_POST['name']:"placeholder='введите имя'"?>>
        <? if(isset($err['name'])){echo $err['name'];} ?>
    </div>
    <div>
        <label>фамилия</label>
        <input name="soname" type="text" <?=(isset($_POST['soname']))?'value='.$_POST['soname']:"placeholder='введите фамилию'"?>>
        <? if(isset($err['soname'])){echo $err['soname'];} ?>
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
        <select name="sex" type="text">
            <?if(!isset($_POST['sex'])){
                echo '
            <option></option>
            <option>М</option>
            <option>Ж</option>';
            } elseif ($_POST['sex']=='М'){
                echo " <option selected='selected'>М</option>
                       <option>Ж</option>";
            } else{ echo " <option selected='selected'>Ж</option>
                            <option>М</option>";
            }?>
        </select>
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
    <button type="submit" class="submit" name="submit">Отправить</button>
</form>





