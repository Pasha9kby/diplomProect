<?php


namespace Project\Controllers;
use \Core\Controller;
use Core\Model;
use \Project\Models\Registration;

if(!empty($_POST)) {
    $err = [];
    $err['flag'] = 0;
    $new_url = '/registration/happy/';
    $massive[] = $_POST;

    $val = new Registration();
    $valMassive = $val->validaition($massive);
    $err = $val->validLogin($valMassive);
    $err = $val->validPassword($valMassive);
    $err = $val->validName($valMassive);
    $err = $val->validSoname($valMassive);
    if ($err['flag'] == 0) {
//        header('Location: ' . $new_url);
        echo "есть ошибки";
    } else { echo "все хорошо";}
    var_dump($err);
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

