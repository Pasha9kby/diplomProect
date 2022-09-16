<?php


namespace Project\Controllers;
use core\controller;
use \Project\Models\Input;

$login = $_POST['login'];
$new_url = '/userlist/';
$bd=new Input();
 $user=$bd->user($login);

if (!empty($user)) {
    $hash = $user['password']; // соленый пароль из БД

    // Проверяем соответствие хеша из базы введенному паролю
    if (password_verify($_POST['password'], $hash)) {
        // все ок, авторизуем...
    } else {
        // пароль не подошел, выведем сообщение
    }
} else {
    // пользователя с таким логином нет, выведем сообщение
}

class InputController extends Controller
{
    public $title = "страница входа";

    public function show(){
        return $this->render('input/show');
    }
}