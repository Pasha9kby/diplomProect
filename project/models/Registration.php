<?php


namespace Project\Models;
use \Core\Model;


class Registration extends Model
{

    public function validaition()
    {
        $massive = [];
        function clear_data($val)
        {
            $val = trim($val);
            $val = stripslashes($val);
            $val = strip_tags($val);
            $val = htmlspecialchars($val);
            return $val;
        }

        $massive['name'] = clear_data($_POST['name']);
        $massive['soname'] = clear_data($_POST['soname']);
        $massive['phone'] = clear_data($_POST['phone']);
        $massive['email'] = clear_data($_POST['email']);
        $massive['login'] = clear_data($_POST['login']);
        $massive['password'] = clear_data($_POST['password']);

        return $massive;
    }

    public function validLogin($massive)
    {
        if (!empty($massive['login']) and !empty($massive['password'])) {
            $login = $massive['login'];

            $query = "SELECT * FROM users WHERE login='$login'";
            $user = $this->findOne($query);

            if (!empty($user)) {
                $err['login'] = '<small class="text-danger">Пользователь с таким логином уже существует</small>';
                $err['flag'] = 1;
                return $err;
            }
        }
    }

    public function validPassword($massive)
    {
        if (!empty($massive['password']) and !empty($massive['confirm'])) {
            if ($massive['password'] == $massive['confirm']) {
            } else {
                $err['password'] = '<small class="text-danger">Пароли не совпадают</small>';
                $err['flag'] = 1;
                return $err;
            }
        }
    }

    public function validName($massive)
    {
        $pattern_name = '/^[А-ЯЁ][а-яё]*$/';
        if (preg_match($pattern_name, $massive['name'])) {
            $err['name'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($massive['name']) > 15 || empty($massive['name'])) {
            $err['name'] = '<small class="text-danger">Имя/фамилия/отчество должны быть не больше 15 символов</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validSoname($massive)
    {
        $pattern_name = '/^[А-ЯЁ][а-яё]*$/';
        if (preg_match($pattern_name, $massive['soname'])) {
            $err['soname'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($massive['soname']) > 15 || empty($massive['soname'])) {
            $err['soname'] = '<small class="text-danger">Имя/фамилия/отчество должны быть не больше 15 символов</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validTel($massive)
    {
        $pattern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';
        if (!preg_match($pattern_phone, $massive['phone'])) {
            $err['phone'] = '<small class="text-danger">Формат телефона не верный!</small>';
            $err['flag'] = 1;
        }
        if (empty($massive['phone'])) {
            $err['phone'] = '<small class="text-danger">Поле не может быть пустым</small>';
            $err['flag'] = 1;
        }
    }

    public function validEmail($massive)
    {
        if (!filter_var($massive['email'], FILTER_VALIDATE_EMAIL)){
            $err['email'] = '<small class="text-danger">Формат Email не верный!</small>';
            $err['flag'] = 1;
        }
        if (empty($email)){
            $err['email'] = '<small class="text-danger">Поле не может быть пустым</small>';
            $err['flag'] = 1;
        }
    }
}



