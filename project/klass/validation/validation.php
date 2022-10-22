<?php


class validation
{
    public function clear_data($val)
    {
        $val = trim($val);
        $val = stripslashes($val);
        $val = strip_tags($val);
        $val = htmlspecialchars($val);
        return $val;
    }

    public function validPassword($password, $confirm)
    {
        $err=[];
        if (!empty($password) and !empty($confirm)) {
            if ($password == confirm) {
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

    public function validTextRUS($textRUS, $long)
    {
        $pattern_name = '~[А-ЯЁ][а-яё]~';
        $err=[];
        if (!preg_match($pattern_name, $textRUS)) {
            $err['name'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($textRUS) > $long || empty($textRUS)) {
            $err['name'] = "<small class='text-danger'>поле должно быть не больше $long символов</small>";
            $err['flag'] = 1;
        }
        if(empty($textRUS)){
            $err['name'] = '<small class="text-danger">Поле должно быть заполнено</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validTel($phone)
    {
        $pattern_phone = '~(\+375)(29|25|44|33)(\d{3})(\d{2})(\d{2})$~';
        $err=[];
        if (!preg_match($pattern_phone, $phone)) {
            $err['phone'] = '<small class="text-danger">Формат телефона не верный!</small>';
            $err['flag'] = 1;
        }
        if (empty($phone)) {
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

    public function validSex($sex)
    {
        $pattern_sex = '~[МЖ]~';
        $err=[];
        if (!preg_match($pattern_sex, $sex)) {
            $err['sex'] = '<small class="text-danger">Здесь только русские буквы</small>';
            $err['flag'] = 1;
        }
        if (mb_strlen($sex) > 1 || empty($sex)) {
            $err['sex'] = '<small class="text-danger">поле Пол должно быть не больше 1 символа</small>';
            $err['flag'] = 1;
        }
        if(empty($sex)){
            $err['sex'] = '<small class="text-danger">Поле Пол должно быть заполнено</small>';
            $err['flag'] = 1;
        }
        return $err;
    }

    public function validDate($date)
    {
        $err=[];
        $date=strtotime($date);
        $day=date('d', $date);
        $month=date('m', $date);
        $yaer=date('Y', $date);
        if (!checkdate("$month", "$day", "$yaer")) {
            $err['date_of_birth'] = '<small class="text-danger">Формат даты не верный!</small>';
            $err['flag'] = 1;
        }

        if (empty($massive['date_of_birth'])) {
            $err['date_of_birth'] = '<small class="text-danger">Поле не может быть пустым</small>';
            $err['flag'] = 1;
        }

        return $err;
    }
}