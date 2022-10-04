<?php


function get_age( $birthday ){

    $diff = date( 'Ymd' ) - date( 'Ymd', strtotime($birthday) );

    return substr( $diff, 0, -4 );
}



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
            <td><? echo $value['familia'].$value['imy']; ?></td>
            <td><? echo $value['sex']; ?></td>
            <td><? if(!empty($value['date_of_birth'])){echo get_age($value['date_of_birth']);} ?></td>
            <td><? echo $value['name_tip_clienta']; ?></td>
        </tr>

        <?}?>
</table>

<pre><?//var_dump($userlist)?></pre>