<?php
use Project\Klass\Get_age\Get_age;
use Project\Klass\Age_to_str\Age_to_str;
?>

<p>Данные пользователя</p>

<div>
    <div><a href="/user/main/<?=$userlist["id_client"]?>/">Личный кабинет</a></div>
    <div><?=$userlist["name_tip_clienta"]?></div>
    <div><?=$userlist["familia"]." ".$userlist["imy"]?><br> <?= (new Get_age())->get_age($userlist['date_of_birth']).(new Age_to_str())->agetostr((new Get_age())->get_age($userlist['date_of_birth']));?></div>
</div><br>
<div><a href="/user/redaction/<?=$userlist["id_client"]?>/"></a></div>
<div>
    <div>Фамилия: <?=$userlist['familia']?></div>
    <div>Имя: <?=$userlist['imy']?></div>
    <div>Отчество: <?=$userlist['otchestvo']?></div>
    <div>пол: <?=$userlist['sex']?></div>
    <div>Дата рождения: <?= date('d-m-Y', strtotime($userlist['date_of_birth']))?></div>
    <div>электронная почта: <?=$userlist['email']?></div>
    <div>Номер телефона: <?//=$userlist['phone']?></div>
    <div>Серия и номер паспорта: <?=$userlist['pasport']?></div>
    <div>Дата выдачи паспорта: <?=$userlist['data_pasporta_vidacha']?></div>
    <div>Фамилия латиницей: <?=$userlist['familia_latinica']?></div>
    <div>Имя латиницей: <?=$userlist['imy_latinica']?></div>
    <div>Прописка: <?=$userlist['propiska']?></div>
</div>