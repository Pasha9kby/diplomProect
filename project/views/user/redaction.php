<?php
use Project\Klass\topInfo\TopInfo;

echo (new TopInfo())->topInfo($userlist);;
?>

<div>
    <form action="" method="POST">
        <div>
            <label>фамилия</label>
            <input name="soname" type="text" <?=(!empty($userlist['familia']))?'value='.$userlist['familia']:"placeholder='введите фамилию'"?>>
            <? if(!empty($err['soname'])){echo $err['soname'];} ?>
        </div>
        <div>
            <label>имя</label>
            <input name="name" type="text" <?=(!empty($userlist['imy']))?'value='.$userlist['imy']:"placeholder='введите имя'"?>>
            <? if(!empty($err['name'])){echo $err['name'];} ?>
        </div>
        <div>
            <label>отчество</label>
            <input name="otchestvo" type="text" <?=(!empty($userlist['otchestvo']))?'value='.$userlist['otchestvo']:"placeholder='введите отчество'"?>>
            <? if(!empty($err['otchestvo'])){echo $err['otchestvo'];} ?>
        </div>
        <div>
            <label>телефон</label>
            <input name="phone" type="tel" <?=(!empty($userlist['phone']))?'value='.$userlist['phone']:"placeholder='+375291111111'"?>>
            <? if(!empty($err['phone'])){echo $err['phone'];} ?>
        </div>
        <div>
            <label>e-mail</label>
            <input name="email" type="email" <?=(!empty($userlist['email']))?'value='.$userlist['email']:"placeholder='введите email'"?>>
            <? if(!empty($err['email'])){echo $err['email'];} ?>
        </div>
        <div>
            <label>Пол</label>
            <select name="sex" type="text" >
                <?if(empty($userlist['sex'])){
                    echo " <option></option>
                <option>М</option>
                <option>Ж</option>";
                }
                elseif ($userlist['sex']='M'){
                    echo " <option selected='selected'>М</option>
                           <option>Ж</option>";
                }
                else{echo " <option selected='selected'>Ж</option>
                            <option>М</option>
                           "; }?>
            </select>
            <? if(!empty($err['sex'])){echo $err['sex'];} ?>
        </div>
        <div>
            <label>Дата рождения</label>
            <input name="date_of_birth" type="date" <?=(!empty($userlist['date_of_birth']))?'value='.$userlist['date_of_birth']:"placeholder='введите дату'"?>>
            <? if(!empty($err['date_of_birth'])){echo $err['date_of_birth'];} ?>
        </div>
        <div>
            <label>Серия и номер паспорта</label>
            <input name="pasport" type="text" <?=(!empty($userlist['pasport']))?'value='.$userlist['pasport']:"placeholder='введите серию и номер паспорта'"?>>
            <? if(!empty($err['pasport'])){echo $err['pasport'];} ?>
        </div>
        <div>
            <label>Дата выдачи паспорта</label>
            <input name="data_pasporta_vidacha" type="date" <?=(!empty($userlist['data_pasporta_vidacha']))?'value='.$userlist['data_pasporta_vidacha']:"placeholder='введите дату'"?>>
            <? if(!empty($err['data_pasporta_vidacha'])){echo $err['data_pasporta_vidacha'];} ?>
        </div>
        <div>
            <label>Фамилия латиницей</label>
            <input name="familia_latinica" type="text" <?=(!empty($userlist['familia_latinica']))?'value='.$userlist['familia_latinica']:"placeholder='введите фамилию латиницей'"?>>
            <? if(!empty($err['familia_latinica'])){echo $err['familia_latinica'];} ?>
        </div>
        <div>
            <label>Имя латиницей</label>
            <input name="imy_latinica" type="text" <?=(!empty($userlist['imy_latinica']))?'value='.$userlist['imy_latinica']:"placeholder='введите имя латиницей'"?>>
            <? if(!empty($err['imy_latinica'])){echo $err['imy_latinica'];} ?>
        </div>
        <div>
            <label>Прописка</label>
            <input name="propiska" type="text" <?=(!empty($userlist['propiska']))?'value='.$userlist['propiska']:"placeholder='введите прописку'"?>>
            <? if(!empty($err['propiska'])){echo $err['propiska'];} ?>
        </div>

        <button type="submit" class="submit" name="submit">Изменить</button>
    </form>
</div>
