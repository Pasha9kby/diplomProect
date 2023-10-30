<?php


namespace Project\Klass\topInfo;
use Project\Klass\Get_age\Get_age;
use Project\Klass\Age_to_str\Age_to_str;
use Project\Klass\Href\Href;


class TopInfo
{

    public function topInfo($userlist){
        $dateOfBirth= (new Get_age())->get_age( $userlist['date_of_birth']).(new Age_to_str())->agetostr((new Get_age())->get_age( $userlist['date_of_birth']));

        $listHrefAdmin=(new Href())->href('/userlist/', 'Список клиентов', 'tophref')
                              ->href('/work/employerlist/', 'Список работодателей', 'tophref')
                              ->listHref();

        $hrefEmployer=(new Href())
            ->href("/work/main/$userlist[id_client]/", 'Личный кабинет', 'tophref')
            ->href("/work/anketa/$userlist[id_client]/", 'Анкета', 'tophref')
            ->href("/work/redaction/$userlist[id_client]/", 'Изменить данные о себе', 'tophref')
            ->href("/work/vacancylist/", 'Список вакансий', 'tophref')
            ->listHref();
        //спиок работодателей

        $href=(new Href())
            ->href("/user/main/$userlist[id_client]/", 'Личный кабинет', 'tophref')
            ->href("/user/anketa/$userlist[id_client]/", 'Анкета', 'tophref')
            ->href("/user/redaction/$userlist[id_client]/", 'Изменить данные о себе', 'tophref')
            ->href("/work/vacancylist/", 'Список вакансий', 'tophref')
            ->listHref();

        $_SESSION['status']==3?($href=$listHrefAdmin.'<br>'.$href):($href=$href);

        $info1= "
        <p>Данные пользователя</p>
        <div class='topInfo'>       
            <div>
                $href
            </div>";
        $info2= ($_SESSION['status']==1 )?(""):("<div>$userlist[name_tip_clienta]</div>
            <div>$userlist[familia] $userlist[imy]<br>$dateOfBirth
             </div>");
        $info3 = "</div>
        <br>";

        $info=$info1.$info2.$info3;

        return $info;
    }

}