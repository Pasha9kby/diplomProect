<?php
use Project\Klass\Get_age\Get_age;

?>

<table  border="1">
    <tr>
        <th>номер договора</th>
        <th>ФИО</th>
        <th>пол</th>
        <th>возраст</th>
        <th>статус</th>
    </tr>
    <?foreach ($userlist as $value){?>

        <tr>
            <td>нет договора</td>
            <td><a href="<?php echo "/user/".$value['id_client'].'/'?>"><? echo $value['familia'].$value['imy']; ?></a> </td>
            <td><? echo $value['sex']; ?></td>
            <td><? if(!empty($value['date_of_birth'])){echo (new Get_age())->get_age($value['date_of_birth']);} ?></td>
            <td><? echo $value['name_tip_clienta']; ?></td>
        </tr>

        <?}?>
</table>

