<?php


namespace Project\Models;
use Core\Model;


class Input extends Model
{
    public function user($login){
        $query = "SELECT * FROM users WHERE login='$login'";
        $user = $this->saveBD($query);
        return $user;
    }

}