<?
use Project\Klass\topInfo\TopInfo;
echo (new TopInfo())->topInfo($userlist); ?>

<table  border="1">
    <tr>
        <th>Наименование</th>
        <th>Статус</th>
        <th>Страна рег-ции</th>
    </tr>
    <?foreach ($userlist as $value){?>

        <tr>
            <td><a href="<?php echo "/work/main/".$value['id_firma'].'/'?>"><? echo $value['name']; ?></a> </td>
            <td><? echo $value['name_tip_clienta']; ?></td>
            <td><? echo $value['name_country']; ?></td>
        </tr>
    <?}?>
</table>
<? echo $navigationPage; ?>
<br>
<form action="" target="_blank">
    <button type="submit" class="submit" name="submit">добавить</button>
</form>

