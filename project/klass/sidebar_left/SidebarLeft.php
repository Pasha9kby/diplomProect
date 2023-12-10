<?php
namespace Project\Klass\sidebar_left;

use Project\Klass\Href\Href;

class SidebarLeft
{
    public function sidebarLeft($userlist){

        $listHrefAdmin=(new Href())->href('/userlist/', 'Список клиентов', 'tophref')
            ->href('/work/employerlist/', 'Список работодателей', 'tophref')
            ->listHref();

        $hrefEmployer=(new Href())
            ->href("/work/main/$userlist[id]/", 'Личный кабинет', 'tophref')
            ->href("/work/anketa/$userlist[id]/", 'Анкета', 'tophref')
            ->href("/work/redaction/$userlist[id]/", 'Изменить данные о себе', 'tophref')
            ->href("/work/vacancylist/", 'Список вакансий', 'tophref')
            ->listHref();
        //спиок работодателей

        $href=(new Href())
            ->href("/user/main/$userlist[id]/", 'Личный кабинет', 'tophref')
            ->href("/user/anketa/$userlist[id]/", 'Анкета', 'tophref')
            ->href("/user/redaction/$userlist[id]/", 'Изменить данные о себе', 'tophref')
            ->href("/work/vacancylist/", 'Список вакансий', 'tophref')
            ->listHref();

        $_SESSION['status']==3?($href=$listHrefAdmin.'<br>'.$href):($href=$href);

        return $href;
    }
}