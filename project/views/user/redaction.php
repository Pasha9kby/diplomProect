<?php
use Project\Klass\topInfo\TopInfo;
use Project\Klass\Href\Href;

$href=(new Href())->href("/user/main/$userlist[id_client]/", 'Вернуться на главную', 'tophref')
    ->href("/user/anketa/$userlist[id_client]/", 'Анкета', 'tophref')
    ->listHref();
echo (new TopInfo())->topInfo($userlist, $href);
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

        <button type="submit" class="submit" name="submit">Изменить</button>
    </form>
</div>
