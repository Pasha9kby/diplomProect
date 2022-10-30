<?php


namespace Project\Klass\Pagination;

use Core\Model;

class Pagination extends Model
{
    public function pagination($notesOnPage){
       if(isset($_GET['page'])){
           $page=$_GET['page'];
       }else{
           $page=1;
       }

       $from=($page-1)*$notesOnPage;
       $query="SELECT * FROM klient WHERE id_client>0 LIMIT ";
    }
}