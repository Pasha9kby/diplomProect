<?php

namespace Project\Controllers;
use Core\Controller;
use Project\Models\User;
use Project\Klass\Validation\Validation;
use Project\Klass\Pagination\Pagination;
use Project\Klass\Page_verification\Page_verification;


new Page_verification();

if(!empty($_POST)) {
    $err = [];
    $err['flag'] = 0;
    $massive = $_POST;

    $val = new Validation();
    $valMassive = $val->validaition();

    if(isset($_POST['submitMessage'])){

        if(!empty($massive['autor'])){
            $valMassive['autor']=$massive['autor'];
        } else {
            $valMassive['autor']=1;
        }

        $errMessage = $val->validMessage($valMassive['message'], 250,1);

        if (!empty($errMessage)) {
            $err = array_merge($err, $errMessage);
            session_start();
            $_SESSION['err'] = $err;
        }
        else{(new User())->saveMessage($valMassive);
            $id=$valMassive['id'];
            $new_url = "/user/main/$id/";
            header('Location: ' . $new_url);
        }
    }

    if(isset($_POST['submitRedaction'])){

        $err['soname']= $val->validTextRUS($valMassive['soname'],25);
        if (!empty($err['soname'])) {
            $err['flag'] = 1;
        }

        $err['name']= $val->validTextRUS($valMassive['name'],25);
        if (!empty($err['name'])) {
            $err['flag']=1;
        }

        $err['otchestvo']= $val->validTextRUS($valMassive['otchestvo'],25);
        if (!empty($err['otchestvo'])) {
            $err['flag']=1;
        }

        $err['phone']= $val->validPhone($valMassive['phone'],1);
        if (!empty( $err['phone'])) {
            $err['flag']=1;
        }

        $err['email']= $val->validEmail($valMassive['email'],1);
        if (!empty($err['email'])) {
            $err['flag']=1;
        }

        $err['sex']= $val->validSex($valMassive['sex'], 1);
        if (!empty($err['sex'])) {
            $err['flag']=1;
        }

        $err['date_of_birth']= $val->validDate($valMassive['date_of_birth'], 1);
        if (!empty($err['date_of_birth'])) {
            $err['flag']=1;
        }

        $err['pasport']= $val->validTextAndNum($valMassive['pasport'],10);
        if (!empty($err['pasport'])) {
            $err['flag']=1;
        }

        $err['data_pasporta_vidacha']= $val->validDate($valMassive['data_pasporta_vidacha']);
        if (!empty($err['data_pasporta_vidacha'])) {
            $err['flag']=1;
        }

        $err['familia_latinica']= $val->validTextEn($valMassive['familia_latinica'],15);
        if (!empty($err['familia_latinica'])) {
            $err['flag']=1;
        }

        $err['imy_latinica']= $val->validTextEn($valMassive['imy_latinica'],15);
        if (!empty($err['imy_latinica'])) {
            $err['flag']=1;
        }

        $errPropiska['propiska']= $val->validTextRUS($valMassive['propiska'],50);
        if (!empty($errPropiska['propiska'])) {
            $err['flag']=1;
        }

        if ($err['flag'] == 0) {
            (new User())->saveUserInfo($valMassive);
            unset($_POST['submitRedaction']);
            $id=$valMassive['id'];
            $new_url = "/user/anketa/$id/";
            header('Location: ' . $new_url);
        }else {
            $_SESSION['err'] = $err;
        }
    }

}

class UserController extends Controller
{
    public $title = "кабинет пользователя";

    public function show($params){
        $page=explode('page', $params['var2']);
        $page=$page[1];
        $queryArray="SELECT * FROM message WHERE id_client = $params[var1] ORDER BY date_message DESC ";
        $queryCount="SELECT COUNT(*) as count FROM message WHERE id_client = $params[var1]";
        $list=(new Pagination($page,5))->users($queryArray);
        $navigationPage=(new Pagination($page,5))
            ->pageCount($queryCount);
        return $this->render('user/show', ['userlist'=>(new User())->user($params['var1']),
            'list'=>$list,
            'navigationPage'=>$navigationPage]);
    }

    public function showMain($params){
        $queryArray="SELECT * FROM message WHERE id_client = $params[var1] ORDER BY date_message DESC
";
        $queryCount="SELECT COUNT(*) as count FROM message WHERE id_client = $params[var1]";
        $list=(new Pagination(1,5))->users($queryArray);
        $navigationPage=(new Pagination(1,5))
            ->pageCount($queryCount);
        return $this->render('user/show', ['userlist'=>(new User())->user($params['var1']),
                                                'list'=>$list,
                                                'navigationPage'=>$navigationPage]);
    }

    public function anketa($params){

        return $this->render('user/anketa', ['userlist'=>(new User())->user($params['var1'])]);
    }

    public function redaction($params){

        return $this->render('user/redaction', ['userlist'=>(new User())->user($params['var1'])]);
    }

}
