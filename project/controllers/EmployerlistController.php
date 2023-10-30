<?php


namespace Project\Controllers;
use core\controller;
use Project\Klass\Pagination\Pagination;
use Project\Klass\UserInfo\UserInfo;


class EmployerlistController extends Controller
{
    public $title = "список работодателей";

    public function show($params){
        $page=explode('page', $params['page']);
        $page=$page[1];
        $queryCount="SELECT COUNT(*) as count FROM firma";
        $queryArray="SELECT * FROM firma
                          LEFT JOIN tip_clienta
                          ON id_tip_clienta = 4 
                          LEFT JOIN country
                          ON country_id = id_country ";
        $userlist=(new Pagination($page))->users($queryArray);
        $navigationPage=(new Pagination($page))->pageCount($queryCount);
        return $this->render('employerlist/show', ['userlist'=>$userlist,
                                                         'navigationPage'=>$navigationPage]);
    }
    public function showMain(){
        $queryArray="SELECT * FROM firma
                          LEFT JOIN tip_clienta
                          ON id_tip_clienta = 4 
                          LEFT JOIN country
                          ON country_id = id_country
                          ";
        $queryCount="SELECT COUNT(*) as count FROM firma";
        $userlist=(new Pagination(1,10))->users($queryArray);
        $navigationPage=(new Pagination(1,10))
            ->pageCount($queryCount);
        $userTopInfo=(new UserInfo())->userInfo($_SESSION['id']);
        return $this->render('employerlist/show', ['userlist'=>$userlist,
                                                         'navigationPage'=>$navigationPage,
                                                         'userTopInfo'=>$userTopInfo]);
    }

}