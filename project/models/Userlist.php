<?php


namespace Project\Models;
use \Core\Model;


class Userlist extends Model
{
    public function users($notesOnPage, $page=1){
//        if(isset($_GET['page'])){
//            $page=$_GET['page'];
//        }else{
//            $page=1;
//        }
        $from=($page-1)*$notesOnPage;

        $query="SELECT * FROM klient 
                         LEFT JOIN tip_clienta
                         ON tip_clienta_id = id_tip_clienta
                         LIMIT $from, $notesOnPage";
//echo "номер ".$from;
        $userlist=$this->findMany($query);

        return $userlist;
    }
}