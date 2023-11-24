<?php

use Project\Klass\topInfo\TopInfo;
use Project\Klass\Get_age\Get_age;

//echo (new TopInfo())->topInfo($userlist); ?>

<div>
    <div>Фамилия: <?=$userlist['familia']?></div>
    <div>Имя: <?=$userlist['imy']?></div>
    <div>Отчество: <?=$userlist['otchestvo']?></div>
    <div>пол: <?=$userlist['sex']?></div>
    <div>Дата рождения: <?= date('d-m-Y', strtotime($userlist['date_of_birth']))?></div>
    <div>электронная почта: <?=$userlist['email']?></div>
    <div>Номер телефона: <?=$userlist['phone']?></div>
    <div>Серия и номер паспорта: <?=$userlist['pasport']?></div>
    <div>Дата выдачи паспорта: <?= ((new Get_age())->get_age($userlist['data_pasporta_vidacha']))<100 ? date('d-m-Y', strtotime($userlist['data_pasporta_vidacha'])):''?></div>
    <div>Фамилия латиницей: <?=$userlist['familia_latinica']?></div>
    <div>Имя латиницей: <?=$userlist['imy_latinica']?></div>
    <div>Прописка: <?=$userlist['propiska']?></div>
</div>