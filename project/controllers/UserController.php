<?php

namespace Project\Controllers;
use Core\Controller;
use Project\Models\User;

if(!empty($_POST)) {
    $err = [];
    $err['flag'] = 0;
    $massive = $_POST;

    $val = new User();
    $valMassive = $val->validaition($massive);
    $valMassive['id']= $massive['id'];

    if(!empty($massive['autor'])){
        $valMassive['autor']=$massive['autor'];
    } else {
        $valMassive['autor']=1;
    }

    $errMessage = $val->validMessage($valMassive);
    if (!empty($errMessage)) {
        $err = array_merge($err, $errMessage);
    }

    if ($err['flag'] == 0) {
        $val->save($valMassive);
        $id=$valMassive['id'];
        $new_url = "/user/main/$id/";
        header('Location: ' . $new_url);
    } else {
        session_start();
        $_SESSION['err'] = $err;
    }
}

class UserController extends Controller
{
    public $title = "кабинет пользователя";

    public function show($params){

        return $this->render('user/show', ['userlist'=>(new User())->user($params['var1']),
                                                'list'=>(new User())->list($params['var1'])]);
    }

    public function anketa($params){

        return $this->render('user/anketa', ['userlist'=>(new User())->user($params['var1'])]);
    }

    public function redaction($params){

        return $this->render('user/redaction', ['userlist'=>(new User())->user($params['var1'])]);
    }

}
