<?php
use Project\Klass\Get_age\Get_age;
use Project\Klass\Age_to_str\Age_to_str;


?>

<p>Данные пользователя</p>

<div>
    <div><a href="/user/anketa/<?=$userlist["id_client"]?>/">Анкета</a></div>
    <div><?=$userlist["name_tip_clienta"]?></div>
    <div><?=$userlist["familia"]." ".$userlist["imy"]?><br> <?= (new Get_age())->get_age($userlist['date_of_birth']).(new Age_to_str())->agetostr((new Get_age())->get_age($userlist['date_of_birth']));?></div>
</div>
<div>
    <div>
        <p>Написать сообщение</p>
        <form action="" method="POST">
            <textarea name="message"></textarea><? if(isset($err['message'])){echo $err['message'];} ?><br>
            <input type="hidden" name="id" value="<?=$userlist["id_client"]?>">
            <button type="submit" class="submit" name="submit">Отправить</button>
        </form>
    </div>
    <div>
        <p>история сообщений</p>
        <?foreach ($list as $item){?>
        <div>
            <div class="small_text"><?= date( 'd-m-Y H:i', strtotime($item['date_message']));?></div>
            <div><?= $item['message']?></div>
        </div>
        <?}?>
    </div>

</div>

