<?php


namespace Project\Controllers;
use core\controller;
use Project\Models\Userlist;


class UserlistController extends Controller
{
    public $title = "список пользователей";
    private $userlist;

    public function __construct(){
        $this->userlist=(new Userlist())->users();
    }
    public function show(){
        return $this->render('userlist/show', ['userlist'=>$this->userlist]);
    }
}