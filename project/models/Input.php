<?php


namespace Project\Models;
use Core\Model;


class Input extends Model
{
    public function user($email){
        $query = "SELECT * FROM klient WHERE email='$email'";
        $user = $this->findOne($query);
        return $user;
    }

    public function validaition(){
        $massive = [];

        $massive['email'] = $this->clear_data($_POST['email']);
        $massive['password'] = $this->clear_data($_POST['password']);

        return $massive;
    }

}