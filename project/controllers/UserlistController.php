<?php


namespace Project\Controllers;
use core\controller;
use Project\Models\Userlist;


class UserlistController extends Controller
{
    public $title = "список пользователей";
    private $userlist;
    private $page;

    public function __construct(){
        $this->userlist=(new Userlist())->users(10,1);
    }
    public function show($params){
        $this->page=$params['page'];
        return $this->render('userlist/show', ['userlist'=>$this->userlist]);
    }
}