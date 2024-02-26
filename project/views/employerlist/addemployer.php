<?php
if(!empty($_SESSION['err']))
{
    $err=$_SESSION['err'];
}

?>


<form action="" method="POST">
    <div>
        <label>Наименование фирмы</label>
        <input name="name" type="text" <?=(isset($_POST['name']))?'value='.$_POST['name']:"placeholder='введите название'"?>>
        <? if(isset($err['name'])){echo $err['name'];} ?>
    </div>
    <br>
    <div>
        <label>e-mail</label>
        <input name="email" type="email" <?=(isset($_POST['email']))?'value='.$_POST['email']:"placeholder='введите email'"?>>
        <? if(isset($err['email'])){echo $err['email'];} ?>
    </div>
    <br>
    <div>
        <label>Страна</label>
        <select name="name_country" type="text">
            <option></option>
            <? foreach ($countryList as $value){
                echo "<option> $value[name_country] </option>";
            }?>
        </select>
    </div>
    <br>
    <div>
        <label>пароль</label>
        <input type="password" name="password" <?=(isset($_POST['password']))?'value='.$_POST['password']:"placeholder='введите пароль'"?>>
        <? if(isset($err['password'])){echo $err['password'];} ?>
    </div>
    <br>
    <div>
        <label>повторите пароль</label>
        <input type="password" name="confirm" <?=(isset($_POST['confirm']))?'value='.$_POST['confirm']:"placeholder='введите пароль'"?>>
        <? if(isset($err['confirm'])){echo $err['confirm'];} ?>
    </div>
    <br>
    <button type="submit" class="submit" name="addemployer">добавить</button>
</form>



