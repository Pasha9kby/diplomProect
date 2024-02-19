<?php


namespace Project\Controllers;
use \Core\Controller;
use Project\Models\Userlist;
use Project\Klass\Pagination\Pagination;
use Project\Klass\UserInfo\UserInfo;
use Project\Models\User;
use Project\Klass\Page_verification\Page_verification;


new Page_verification();

class UserlistController extends Controller
{
    public $title = "список пользователей";

    public function show($params){
        $page=explode('page', $params['page']);
        $page=$page[1];
        $users=(new Userlist())->users();
        // $queryCount="SELECT COUNT(*) as count FROM klient";
        // $queryArray="SELECT * FROM klient
        //                   LEFT JOIN tip_clienta
        //                   ON tip_clienta_id = id_tip_clienta ";
        $userlist=(new Pagination($page))->users($users[0]);
        $navigationPage=(new Pagination($page))->pageCount($users[1]);
        return $this->render('userlist/show', ['userlist'=>$userlist,
                                                    'navigationPage'=>$navigationPage,
                                                     'userlist1'=>(new User())->user($params)]
        );
    }

    public function showMain(){
        $users=(new Userlist())->users();
        $userlist=(new Pagination(1,10))->users($users[0]);
        $navigationPage=(new Pagination(1,10))->pageCount($users[1]);
        return $this->render('userlist/show', ['userlist'=>$userlist,
                                                'navigationPage'=>$navigationPage,
                                               ]);
        
    }
}