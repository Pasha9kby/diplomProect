<?php
namespace Project\Controllers;
use core\controller;
use \Project\Models\Input;

$new_url = '/userlist/';
$user_url = '/user/main/41/';


if(!empty($_POST['email'])){
    $massive[] = $_POST;
    $val = new Input();
    $valMassive = $val->validaition($massive);
    $user=$val->user($valMassive['email']);

    if (!empty($user)) {
        $hash = $user['hash'];
        if (password_verify($_POST['password'], $hash)) {
            $_SESSION['id']=$user['id_client'];
            $_SESSION['status']=$user['tip_clienta_id'];
            if($user['tip_clienta_id']==1){
                header('Location: ' . '/user/main/'.$user['id_client'].'/');
            }
            else {header('Location: ' . $new_url);}


        } else {
            $err = '<p class="currentPage">Не правильное сочетание логин/пароль</p>';
        }
    } else {
        $err = '<p class="currentPage">Не правильное сочетание логин/пароль</p>';
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