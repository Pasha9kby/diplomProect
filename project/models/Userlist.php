<?php


namespace Project\Models;
use \Core\Model;


class Userlist extends Model
{
    public function users(){
        $query='SELECT * FROM klient 
                         LEFT JOIN tip_clienta
                         ON tip_clienta_id = id_tip_clienta';
        $userlist=$this->findMany($query);

        return $userlist;
    }
}