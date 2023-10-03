<?php


namespace Project\Klass\topInfo;
use Project\Klass\Get_age\Get_age;
use Project\Klass\Age_to_str\Age_to_str;
use Project\Klass\Href\Href;


class TopInfo
{

    public function topInfo($userlist){
        $dateOfBirth= (new Get_age())->get_age( $userlist['date_of_birth']).(new Age_to_str())->agetostr((new Get_age())->get_age( $userlist['date_of_birth']));

        $href=(new Href())
            ->href("/user/main/$userlist[id_client]/", 'Личный кабинет', 'tophref')
            ->href("/user/anketa/$userlist[id_client]/", 'Анкета', 'tophref')
            ->href("/user/redaction/$userlist[id_client]/", 'Изменить данные о себе', 'tophref')
            ->listHref();



        $info= "
        <p>Данные пользователя</p>
        <div class='topInfo'>
            <div>
                $href
            </div>         
            <div>$userlist[name_tip_clienta]</div>
            <div>$userlist[familia] $userlist[imy]<br>$dateOfBirth
             </div>
        </div>
        <br>
        ";

        return $info;
    }

}