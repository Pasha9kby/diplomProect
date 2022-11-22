<?php


namespace Project\Controllers;
use core\controller;
use Project\Models\Userlist;
use Project\Klass\Pagination\Pagination;


class UserlistController extends Controller
{
    public $title = "список пользователей";

//    public function show($params){
//        $page=explode('page', $params['page']);
//        $queryCount="SELECT COUNT(*) as count FROM klient";
//        $queryArray="SELECT * FROM klient
//                          LEFT JOIN tip_clienta
//                          ON tip_clienta_id = id_tip_clienta ";
//        $userlist=(new Pagination($page))->users($queryArray);
//        $navigationPage=(new Pagination($page))->pageCount($queryCount);
//        return $this->render('userlist/show', ['userlist'=>$userlist, 'navigationPage'=>$navigationPage]);
//    }

    public function showMain(){
        //$queryCount="SELECT COUNT(*) as count FROM klient";
        $queryArray="SELECT * FROM klient
                          LEFT JOIN tip_clienta
                          ON tip_clienta_id = id_tip_clienta ";
        //$userlist=(new Pagination())->users($queryArray);
        $navigationPage=(new Pagination(1,10))
            ->pageCount();
        return $this->render('userlist/show', ['userlist'=>$userlist, 'navigationPage'=>$navigationPage]);
    }
}