<?php
use Project\Klass\topInfo\TopInfo;

if(isset($_POST['submitRedaction'])){
    if(isset($_SESSION['err'])){
        $err=$_SESSION['err'];
    }
}


echo (new TopInfo())->topInfo($userlist);
?>

<div>
    <form action="" method="POST">
        <div>
            <label>фамилия</label>
            <input name="soname" type="text" value="<?=$_POST['soname']??$userlist['familia']??''?>" placeholder="введите фамилию">
            <? if(!empty($err['soname'])){echo $err['soname'];} ?>
        </div>
        <div>
            <label>имя</label>
            <input name="name" type="text" value="<?=$_POST['name']??$userlist['imy']??''?>" placeholder="введите фамилию">
            <? if(!empty($err['name'])){echo $err['name'];} ?>
        </div>
        <div>
            <label>отчество</label>
            <input name="otchestvo" type="text" value="<?=$_POST['otchestvo']??$userlist['otchestvo']??''?>" placeholder="введите отчество">
            <? if(!empty($err['otchestvo'])){echo $err['otchestvo'];} ?>
        </div>
        <div>
            <label>телефон</label>
            <input name="phone" type="tel" value="<?=$_POST['phone']??$userlist['phone']??''?>" placeholder="введите номер в формате +375291111111">
            <? if(!empty($err['phone'])){echo $err['phone'];} ?>
        </div>
        <div>
            <label>e-mail</label>
            <input name="email" type="email" value="<?=$_POST['email']??$userlist['email']??''?>" placeholder="введите email">
            <? if(!empty($err['email'])){echo $err['email'];} ?>
        </div>
        <div>
            <label>Пол</label>
            <select name="sex" type="text" >
                <? $item=$_POST['sex']?? $userlist['sex']??null;
                if(empty($item)){
                    echo " <option></option>
                <option>М</option>
                <option>Ж</option>";
                }
                elseif ($item=='М'){
                    echo " <option selected='selected'>М</option>
                           <option>Ж</option>";
                }
                else{echo " <option selected='selected'>Ж</option>
                            <option>М</option>"; }?>
            </select>
            <? if(!empty($err['sex'])){echo $err['sex'];} ?>
        </div>
        <div>
            <label>Дата рождения</label>
            <input name="date_of_birth" type="date" value="<?=$_POST['date_of_birth']??$userlist['date_of_birth']??''?>" placeholder="введите дату рождения">
            <? if(!empty($err['date_of_birth'])){echo $err['date_of_birth'];} ?>
        </div>
        <div>
            <label>Серия и номер паспорта</label>
            <input name="pasport" type="text" value="<?=$_POST['pasport']??$userlist['pasport']??''?>" placeholder="серия и номер паспорта">
            <? if(!empty($err["pasport"])){echo $err["pasport"];}  ?>
        </div>
        <div>
            <label>Дата выдачи паспорта</label>
            <input name="data_pasporta_vidacha" type="date" value="<?=$_POST['data_pasporta_vidacha']??$userlist['data_pasporta_vidacha']??''?>" placeholder="введите дату выдачи паспорта">
            <? if(!empty($err['data_pasporta_vidacha'])){echo $err['data_pasporta_vidacha'];} ?>
        </div>
        <div>
            <label>Фамилия латиницей</label>
            <input name="familia_latinica" type="text" value="<?=$_POST['familia_latinica']??$userlist['familia_latinica']??''?>" placeholder="введите фамилию латиницей">
            <? if(!empty($err['familia_latinica'])){echo $err['familia_latinica'];} ?>
        </div>
        <div>
            <label>Имя латиницей</label>
            <input name="imy_latinica" type="text" value="<?=$_POST['imy_latinica']??$userlist['imy_latinica']??''?>" placeholder="введите имя латиницей">
            <? if(!empty($err['imy_latinica'])){echo $err['imy_latinica'];} ?>
        </div>
        <div>
            <label>Прописка</label>
            <input name="propiska" type="text" value="<?=$_POST['propiska']??$userlist['propiska']??''?>" placeholder="введите прописку">
            <? if(!empty($err['propiska'])){echo $err['propiska'];} ?>
        </div>
        <input type="hidden" name="id" value="<?=$userlist["id_client"]?>">
        <input type="hidden" name="id_tip_clienta" value="<?=$userlist["id_tip_clienta"]?>">

        <button type="submit" class="submit" name="submitRedaction">Изменить</button>
    </form>
</div>
