<?php
use Project\Klass\topInfo\TopInfo;

echo (new TopInfo())->topInfo($userlist);;?>

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

