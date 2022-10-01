<?php


namespace Project\Controllers;
use core\controller;
use \Project\Models\Input;

if(!empty($_POST['email'])){
    $new_url = '/userlist/';
    $massive[] = $_POST;

    $val = new Input();
    $valMassive = $val->validaition($massive);
    $user=$val->user($valMassive['email']);

    if (!empty($user)) {
        $hash = $user['pasword'];
        if (password_verify($_POST['password'], $hash)) {

//            header('Location: ' . $new_url);
            $err = 'все отлично';
        } else {
            $err = 'пароль не подошел';
        }
    } else {
        $err = 'логин не подошел';
    }
    $_SESSION['err']=$err;
}



class InputController extends Controller
{
    public $title = "страница входа";

    public function show(){
        return $this->render('input/show');
    }
}