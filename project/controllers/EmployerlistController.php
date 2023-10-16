<?php


namespace Project\Controllers;
use core\controller;
use Project\Klass\Pagination\Pagination;
use Project\Klass\UserInfo\UserInfo;


class EmployerlistController extends Controller
{
    public $title = "список работодателей";

    public function showMain(){
        $queryArray="SELECT * FROM klient
                          LEFT JOIN tip_clienta
                          ON tip_clienta_id = id_tip_clienta 
                          ";
        $queryCount="SELECT COUNT(*) as count FROM klient";
        $userlist=(new Pagination(1,10))->users($queryArray);
        $navigationPage=(new Pagination(1,10))
            ->pageCount($queryCount);
        $userTopInfo=(new UserInfo())->userInfo($_SESSION['id']);
        return $this->render('userlist/show', ['userlist'=>$userlist,
            'navigationPage'=>$navigationPage,
            'userTopInfo'=>$userTopInfo]);
    }

}