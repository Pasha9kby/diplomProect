<?php


namespace Project\Controllers;
use \Core\Controller;
//use Core\Model;
use \Project\Models\Registration;

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

//        $to='pasha9k@tut.by';
//        $subject='проверка отправки';
//        $message='Почта работает';
//        echo mail($to, $subject, $message);

        header('Location: ' . $new_url);


    } else {
        session_start();
        $_SESSION['err'] = $err;
    }

//    $test = $_POST['date_of_birth'];
////    echo $test1=timestamp();
//    echo "время: " . strtotime($test) . "<br>";
//    $vremia = floor((time() - strtotime($test)) / 60 / 60 / 24);
//    echo $vremia . " дней<br>";
//    $test2 = strtotime($test);
//    echo "новое время " . date('d-m-Y', $test2) . "<br>";
////    echo "новое время2 ".date_format($test2, 'd-m-Y');
//    $day = date('d', $test2);
//    $month = date('m', $test2);
//    $yaer = date('Y', $test2);
//
//$test= strtotime($errDate);
//    $day = date('d', $test);
//    $month = date('m', $test);
//    $yaer = date('Y', $test);
//    echo "дата день - ".$day.", month - ".$month.", yaer - ".$yaer;

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

    public function happyRegistration()
    {
        $this->title="happyRegistration";
        return $this->render('registration/happy');
    }

}

