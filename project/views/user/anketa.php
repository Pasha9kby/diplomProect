<?php

use Project\Klass\topInfo\TopInfo;
use Project\Klass\UserInfo\UserInfo;

echo (new UserInfo())->userInfo($_SESSION['id']);
echo (new TopInfo())->topInfo($userlist); ?>

<div>
    <div>Фамилия: <?=$userlist['familia']?></div>
    <div>Имя: <?=$userlist['imy']?></div>
    <div>Отчество: <?=$userlist['otchestvo']?></div>
    <div>пол: <?=$userlist['sex']?></div>
    <div>Дата рождения: <?= date('d-m-Y', strtotime($userlist['date_of_birth']))?></div>
    <div>электронная почта: <?=$userlist['email']?></div>
    <div>Номер телефона: <?=$userlist['phone']?></div>
    <div>Серия и номер паспорта: <?=$userlist['pasport']?></div>
    <div>Дата выдачи паспорта: <?= !empty($userlist['data_pasporta_vidacha']) ? date('d-m-Y', strtotime($userlist['data_pasporta_vidacha'])):''?></div>
    <div>Фамилия латиницей: <?=$userlist['familia_latinica']?></div>
    <div>Имя латиницей: <?=$userlist['imy_latinica']?></div>
    <div>Прописка: <?=$userlist['propiska']?></div>
</div>