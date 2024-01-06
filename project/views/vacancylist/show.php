<?php
unset($_SESSION['err']);?>


<table  border="1">
    <tr>
        <th>Страна</th>
        <th>Работодатель</th>
        <th>Наименование вакансии</th>
        <th>Заработная плата</th>
        <th>Подробнее</th>
    </tr>
<!--    --><?//foreach ($userlist as $value){?>
<!---->
<!--        <tr>-->
<!--            <td>нет договора</td>-->
<!--            <td><a href="--><?php //echo "/user/main/".$value['id_client'].'/'?><!--">--><?// echo $value['familia'].' '.$value['imy']; ?><!--</a> </td>-->
<!--            <td>--><?// echo $value['sex']; ?><!--</td>-->
<!--            <td>--><?// if(!empty($value['date_of_birth'])){echo (new Get_age())->get_age($value['date_of_birth']);} ?><!--</td>-->
<!--            <td>--><?// echo $value['name_tip_clienta']; ?><!--</td>-->
<!--        </tr>-->
<!---->
<!--    --><?//}?>
</table>
<?php var_dump($userlist);?>
<? echo $navigationPage; ?>
<br>
<form action="/registration/" target="_blank">
    <button type="submit" class="submit" name="userreg"><a href="/registration/">добавить</a></button>
</form>