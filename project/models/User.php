<?php


namespace Project\Models;
use Core\Model;


class User extends Model
{
    public function user($id){
        $query="SELECT * FROM klient 
                         LEFT JOIN tip_clienta
                         ON klient.tip_clienta_id = tip_clienta.id_tip_clienta
                         LEFT JOIN phone
                         ON  phone.id_client = klient.id_client
                         WHERE klient.id_client = $id";

        $userlist=$this->findOne($query);

        return $userlist;
    }

    public function validaition()
    {
        $massive = [];

        $massive['message'] = $this->clear_data($_POST['message']);
        $massive['id'] = $this->clear_data($_POST['id']);

        return $massive;
    }

    public function validMessage($massive){
        $err=[];
        if (mb_strlen($massive['message']) > 250 || empty($massive['message'])) {
            $err['message'] = '<small class="text-danger">Сообщение должно быть не больше 250 символов</small>';
            $err['flag'] = 1;
            return $err;
        }
        if(empty($massive['message'])){
            $err['message'] = '<small class="text-danger">Сообщение не должно быть пустым</small>';
            $err['flag'] = 1;
            return $err;
        }
    }

    public function save($massive)
    {
        $message=$massive['message'];
        $id_client=$massive['id'];
        $id_autor=$massive['autor'];
        $date=date('Y-m-d H:i',time());


        $query = "INSERT INTO message (
        id_client,
        date_message,
        message,
        id_autor)
        VALUES (
                '$id_client',
                '$date',
                '$message',
                '$id_autor'
         )";
        $saveMassage = $this->saveBD($query);

        return  $saveMassage;
    }

    public function list($id_client){
        $query="SELECT * FROM message WHERE id_client = $id_client ORDER BY date_message DESC";
        $list=$this->findMany($query);
        return $list;
    }


}