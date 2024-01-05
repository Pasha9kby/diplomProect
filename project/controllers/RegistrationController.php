<?php


namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Registration;


if(!empty($_POST)) {echo 'существует ПОСТ';}

if(!empty($_POST)) {
    $err = [];
    $err['flag'] = 0;
    $new_url = '/registration/happy/';
    $massive[] = $_POST;

    
    $val = new Registration();
    $valMassive = $val->validaition($massive);
    $errSex = $val->validSex($valMassive);
    if (!empty($errSex)) {
        $err = array_merge($err, $errSex);
    }
    $errPassword = $val->validPassword($valMassive);
    if (!empty($errPassword)) {
        $err = array_merge($err, $errPassword);
    }
    $errName = $val->validName($valMassive);
    if (!empty($errName)) {
        $err = array_merge($err, $errName);
    }
    $errSoname = $val->validSoname($valMassive);
    if (!empty($errSoname)) {
        $err = array_merge($err, $errSoname);
    }
    $errPhone = $val->validTel($valMassive);
    if (!empty($errPhone)) {
        $err = array_merge($err, $errPhone);
    }
    $errEmail = $val->validEmail($valMassive);
    if (!empty($errEmail)) {
        $err = array_merge($err, $errEmail);
    }
    $errDate = $val->validDate($valMassive);
    if (!empty($errDate)) {
        $err = array_merge($err, $errDate);
    }
    if ($err['flag'] == 0) {
        $valMassive['password'] = password_hash($valMassive['password'], PASSWORD_DEFAULT);
        $val->save($valMassive);
        unset($_SESSION['err']);


//        $to='pasha9k@tut.by';
//        $subject='проверка отправки';
//        $message='Почта работает';
//        echo mail($to, $subject, $message);

        header('Location: ' . $new_url);


    } else {
        $_SESSION['err'] = $err;
    }

}


class RegistrationController extends Controller
{

    public function show()
    {
        $this->title="registration";
        return $this->render('registration/show');
    }

    public function error()
    {
        $this->title="errorregistration";
        return $this->render('registration/error');
    }

    public function happyregistration()
    {
        $this->title="happyregistration";
        return $this->render('registration/happy');
    }

    
}

