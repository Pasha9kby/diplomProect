<?php


namespace Project\Models;
use \Core\Model;


class Registration extends Model
{

    public function validaition()
    {
        $massive = [];
//        function clear_data($val)
//        {
//            $val = trim($val);
//            $val = stripslashes($val);
//            $val = strip_tags($val);
//            $val = htmlspecialchars($val);
//            return $val;
//        }
        $massive['name'] = $this->clear_data($_POST['name']);
        $massive['soname'] = $this->clear_data($_POST['soname']);
        $massive['phone'] = $this->clear_data($_POST['phone']);
        $massive['email'] = $this->clear_data($_POST['email']);
        $massive['sex'] = $this->clear_data($_POST['sex']);
        $massive['password'] = $this->clear_data($_POST['password']);
        $massive['confirm'] = $this->clear_data($_POST['confirm']);

        return $massive;
    }

    public function validPassword($massive)
    {
        $err=[];
        if (!empty($massive['password']) and !empty($massive['confirm'])) {
            if ($massive['password'] == $massive['confirm']) {
            } else {
                $err['password'] = '<small class="text-danger">Пароли не совпадают</small>';
                $err['flag'] = 1;
                return $err;
            }
        }
        else{
            $err['password'] = '<small class="text-danger">Не введен пароль</small>';
            $err['flag'] = 1;
            return $err;
        }
    }

    public function validName($massive)
    {
        $pattern_name = '~[А-ЯЁ][а-яё]~';
        $err=[];
        if (!preg_match($pattern_name, $massive['name'])) {
            $err['name'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($massive['name']) > 15 || empty($massive['name'])) {
            $err['name'] = '<small class="text-danger">поле Имя должно быть не больше 15 символов</small>';
            $err['flag'] = 1;
        }
        if(empty($massive['name'])){
            $err['name'] = '<small class="text-danger">Поле Имя должно быть заполнено</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validSoname($massive)
    {
        $pattern_name = '~[А-ЯЁ][а-яё]~';
        $err=[];
        if (!preg_match($pattern_name, $massive['soname'])) {
            $err['soname'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($massive['soname']) > 15 || empty($massive['soname'])) {
            $err['soname'] = '<small class="text-danger">поле Фамилия должно быть не больше 15 символов</small>';
            $err['flag'] = 1;
        }
        if (empty($massive['soname'])){
            $err['soname'] = '<small class="text-danger">Поле Фамилия должно быть заполнено</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validTel($massive)
    {
        $pattern_phone = '~(\+375)(29|25|44|33)(\d{3})(\d{2})(\d{2})$~';
        $err=[];
        if (!preg_match($pattern_phone, $massive['phone'])) {
            $err['phone'] = '<small class="text-danger">Формат телефона не верный!</small>';
            $err['flag'] = 1;
        }
        if (empty($massive['phone'])) {
            $err['phone'] = '<small class="text-danger">Поле не может быть пустым</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validEmail($massive)
    {
        $err=[];
        if (!empty($massive['email']) and !empty($massive['password']) and !empty($massive['phone'])) {
            $email = $massive['email'];
            $phone = $massive['phone'];

            $query = "SELECT * FROM klient WHERE email='$email'";
            $user = $this->findOne($query);

            if (!empty($user)) {
                $err['email'] = '<small class="text-danger">Пользователь с таким email уже существует</small>';
                $err['flag'] = 1;
                return $err;
            }
        }
        else {
            $err['email'] = '<small class="text-danger">Не заполнено поле email или пароль</small>';
            $err['flag'] = 1;
        }
    }

    public function validSex($massive)
    {
        $pattern_name = '~[МЖ]~';
        $err=[];
        if (!preg_match($pattern_name, $massive['sex'])) {
            $err['sex'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($massive['sex']) > 1 || empty($massive['sex'])) {
            $err['sex'] = '<small class="text-danger">поле Пол должно быть не больше 1 символа</small>';
            $err['flag'] = 1;
        }
        if(empty($massive['sex'])){
            $err['sex'] = '<small class="text-danger">Поле Пол должно быть заполнено</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function save($massive)
    {
        $name=$massive['name'];
        $soname=$massive['soname'];
        $sex=$massive['sex'];
        $email=$massive['email'];
        $password=$massive['password'];
        $phone=$massive['phone'];


        $query = "INSERT INTO klient (
        familia,
        imy,
        sex,
        email,
        pasword,
        tip_clienta_id)
        VALUES (
                '$soname',
                '$name',
                '$sex',
                '$email',
                '$password',
                1
         )";
        $user = $this->saveBD($query);
        $id=$this->lastID();
        $query = "INSERT INTO phone (
                   id_client,
                   phone) 
                   VALUE (
                    '$id',
                    '$phone'
        )";
        $userphone = $this->saveBD($query);
        return $id;
    }
}



