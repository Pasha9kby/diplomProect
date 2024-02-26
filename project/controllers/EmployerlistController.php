<?php

namespace Project\Controllers;
use \Core\Controller;
use Project\Klass\Pagination\Pagination;
use Project\Klass\UserInfo\UserInfo;
use Project\Klass\Page_verification\Page_verification;
use Project\Models\Employerlist;

new Page_verification();

class EmployerlistController extends Controller
{
    public $title = "список работодателей";

    public function show($params){
        $page=explode('page', $params['page']);
        $page=$page[1];
        $Employerlist=new Employerlist();
        $queryCount=$Employerlist->queryCount();
        $queryArray=$Employerlist->queryArray();
        $userlist=(new Pagination($page))->users($queryArray);
        $navigationPage=(new Pagination($page))->pageCount($queryCount);
        return $this->render('employerlist/show', ['userlist'=>$userlist,
                                                         'navigationPage'=>$navigationPage]);
    }
    public function showMain(){
        $Employerlist=new Employerlist();
        $queryCount=$Employerlist->queryCount();
        $queryArray=$Employerlist->queryArray();
        $userlist=(new Pagination(1,10))->users($queryArray);
        $navigationPage=(new Pagination(1,10))
            ->pageCount($queryCount);
        $userTopInfo=(new UserInfo())->userInfo($_SESSION['id']);
        return $this->render('employerlist/show', ['userlist'=>$userlist,
                                                         'navigationPage'=>$navigationPage,
                                                         'userTopInfo'=>$userTopInfo]);
    }

    public function add(){
        $userTopInfo=(new UserInfo())->userInfo($_SESSION['id']);
        $countryList=(new Employerlist())->country();
        return $this->render('employerlist/addemployer',
            ['userTopInfo'=>$userTopInfo,
            'countryList'=>$countryList]
        );
    }

}