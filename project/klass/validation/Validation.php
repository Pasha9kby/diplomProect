<?php
namespace Project\Klass\validation;

class Validation
{

    public function clear_data($val)
    {
        $val = trim($val);
        $val = stripslashes($val);
        $val = strip_tags($val);
        $val = htmlspecialchars($val);
        return $val;
    }

    public function validaition()
    {
        $massive = [];

        foreach ($_POST as $value=>$item){
            $massive[$value]=$this->clear_data($item);
        }
        return $massive;
    }

    public function validPassword($password, $confirm)
    {
        $err=[];
        if (!empty($password) and !empty($confirm)) {
            if ($password == $confirm) {
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

    public function validTextRUS($textRUS, $long, $requiredField=0)
    {
        $pattern_name = '~[А-ЯЁ][а-яё]~';
        if (!preg_match($pattern_name, $textRUS) and !empty($textRUS)) {
            $err = '<small class="text-danger">Здесь только русские буквы</small>';
        }
        if (mb_strlen($textRUS) > $long and !empty($textRUS)) {
            $err = "<small class='text-danger'>поле должно быть не больше $long символов</small>";
        }
        if(empty($textRUS) and $requiredField==1){
            $err= '<small class="text-danger">Поле должно быть заполнено</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validTextEn($textEn, $long, $requiredField=0)
    {
        $pattern_name = '~[A-Z][a-z]~';
        $err=[];
        if (!preg_match($pattern_name, $textEn) and !empty($textEn)) {
            $err = '<small class="text-danger">Здесь только латинские буквы</small>';
        }
        if (mb_strlen($textEn) > $long) {
            $err = "<small class='text-danger'>поле должно быть не больше $long символов</small>";
        }
        if(empty($textEn) and $requiredField==1){
            $err= '<small class="text-danger">Поле должно быть заполнено</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validTextAndNum($text, $long, $requiredField=0)
    {
        $pattern_name = '~[А-ЯЁ][а-яё]|[A-Z][a-z]|[0-9]~';
        if (!preg_match($pattern_name, $text) and !empty($text)) {
            $err = '<small class="text-danger">Здесь только буквы и цифры</small>';
        }
        if (mb_strlen($text) > $long and empty($text)) {
            $err = "<small class='text-danger'>поле должно быть не больше $long символов</small>";
        }
        if(empty($text) and $requiredField==1){
            $err = '<small class="text-danger">Поле должно быть заполнено</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validPhone($phone, $requiredField=0)
    {
        $pattern_phone = '~(\+375)(29|25|44|33)(\d{3})(\d{2})(\d{2})$~';
        $err=[];
        if (!preg_match($pattern_phone, $phone) and !empty($phone)) {
            $err = '<small class="text-danger">Формат телефона не верный!</small>';
        }
        if (empty($phone) and $requiredField==1) {
            $err = '<small class="text-danger">Поле не может быть пустым</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validEmail($email, $requiredField = 0)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err = '<small class="text-danger">email указан не правильно</small>';
        }
        if(empty($email) and $requiredField==1) {
            $err = '<small class="text-danger">Не заполнено поле email</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validSex($sex, $requiredField=0)
    {
        $pattern_sex = '~[МЖ]~';

        if (!preg_match($pattern_sex, $sex) and !(empty($sex))) {
            $err = '<small class="text-danger">Здесь только русские буквы</small>';
        }
        if (mb_strlen($sex) > 1 || empty($sex)) {
            $err = '<small class="text-danger">поле Пол должно быть не больше 1 символа</small>';
        }
        if(empty($sex) and $requiredField==1){
            $err = '<small class="text-danger">Поле Пол должно быть заполнено</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validDate($date, $requiredField=0)
    {
        $date=strtotime($date);
        $day=date('d', $date);
        $month=date('m', $date);
        $yaer=date('Y', $date);

        if (!checkdate("$month", "$day", "$yaer")) {
            $err = '<small class="text-danger">Формат даты не верный!</small>';
        }

        if (empty($date) and $requiredField==1) {
            $err = '<small class="text-danger">Поле не может быть пустым</small>';
        }
        if(isset($err)){
            return $err;
        }
    }

    public function validMessage($message, $long, $requiredField=0){
        $err=[];
        if (mb_strlen($message) > $long and !empty($message)) {
            $err['message'] = "<small class='text-danger'>Сообщение должно быть не больше $long символов</small>";
            $err['flag'] = 1;
            return $err;
        }
        if(empty($message) and $requiredField==1){
            $err['message'] = '<small class="text-danger">Сообщение не должно быть пустым</small>';
            $err['flag'] = 1;
            return $err;
        }
    }
}