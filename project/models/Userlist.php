<?php


namespace Project\Models;
use \Core\Model;


class Userlist extends Model
{
    // public function users($notesOnPage=10, $page=1){

    //     $from=($page-1)*$notesOnPage;

    //     $query="SELECT * FROM klient 
    //                      LEFT JOIN tip_clienta
    //                      ON tip_clienta_id = id_tip_clienta
    //                      LIMIT $from, $notesOnPage";

    //     $userlist=$this->findMany($query);

    //     return $userlist;
    // }
        public function users (){
            $queryArray="SELECT * FROM klient
                          LEFT JOIN tip_clienta
                          ON tip_clienta_id = id_tip_clienta
                          LEFT JOIN anketa_clienta
                          ON id_client = id_clienta 
                          ";              
            $queryCount="SELECT COUNT(*) as count FROM klient";
            $query= array($queryArray, $queryCount);
            return  $query;
        }
    


}