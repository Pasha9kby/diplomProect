<?php


namespace Project\Models;
use Core\Model;


class User extends Model
{
    public function user($id){
        $query="SELECT klient.id_client, 
                       klient.tip_clienta_id, 
                       Klient.familia,
                       klient.imy,
                       klient.otchestvo,
                       klient.sex,
                       klient.date_of_birth,
                       Klient.email,
                       klient.pasport,
                       klient.familia_latinica,
                       klient.imy_latinica,
                       klient.propiska,
                       klient.data_pasporta_vidacha,
                       klient.registration,
                       tip_clienta.name_tip_clienta,
                       phone.phone
                         FROM klient 
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
        $name=$massive['name']??null;
        $soname=$massive['soname']??null;
        $sex=$massive['sex']??null;
        $email=$massive['email']??null;
        $phone=$massive['phone']??null;
        $date_of_birth=$massive['date_of_birth']??null;
        $id=$massive['id'];
        $pasport=$massive['pasport']??null;
        $datePasport=$massive['data_pasporta_vidacha']??null;
        $familiaLatinica=$massive['familia_latinica']??null;
        $imyLatinica=$massive['imy_latinica']??null;
        $propiska=$massive['propiska']??null;
        $otchestvo=$massive['otchestvo']??null;

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