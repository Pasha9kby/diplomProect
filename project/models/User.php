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

    public function saveMessage($massive)
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

    public function saveUserInfo($massive)
    {
        $name=$massive['name'];
        $soname=$massive['soname'];
        $sex=$massive['sex'];
        $email=$massive['email'];
        $phone=$massive['phone'];
        $date_of_birth=$massive['date_of_birth'];
        $id=$massive['id'];
        $pasport=$massive['pasport'];
        $datePasport=$massive['data_pasporta_vidacha'];
        $familiaLatinica=$massive['familia_latinica'];
        $imyLatinica=$massive['imy_latinica'];
        $propiska=$massive['propiska'];
        $otchestvo=$massive['otchestvo'];

        $query = "UPDATE klient SET 
        familia = '$soname',
        imy = '$name',
        sex = '$sex',
        email = '$email',
        date_of_birth = '$date_of_birth',
        otchestvo = '$otchestvo',
        pasport = '$pasport',
        familia_latinica = '$familiaLatinica',
        imy_latinica = '$imyLatinica',
        propiska = '$propiska',
        data_pasporta_vidacha = '$datePasport'
        WHERE id_client = '$id'";
        $user = $this->saveBD($query);

        if(!empty($phone)){
            $query = "UPDATE phone SET
                   phone = '$phone' 
                  WHERE id_client = '$id'";
            $userphone = $this->saveBD($query);
        }

        return $id;
    }


}