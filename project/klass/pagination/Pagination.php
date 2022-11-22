<?php


namespace Project\Klass\Pagination;
use Core\Model;

class Pagination extends Model
{
    private $page;
    private $notesOnPage;

    public function __construct($page=1, $notesOnPage=10)
    {
        $this->page=$page;
        $this->notesOnPage=$notesOnPage;
    }

    public function users($queryArray){

        $from=($this->page-1)*$this->notesOnPage;

        $query=$queryArray."LIMIT $from, $this->notesOnPage";
        echo "вызов массива ".$query;

//        $query="SELECT * FROM klient
//                         LEFT JOIN tip_clienta
//                         ON tip_clienta_id = id_tip_clienta
//                         LIMIT $from, $notesOnPage";

        $userlist=$this->findMany($query);

        return $userlist;
    }

    public function pageCount(){
        $query="SELECT COUNT(*) as count FROM klient";
        //echo "<br>вывод на количество ".$queryCount;
        $count=$this->findMany($query);
        $pageCount=ceil($count[0]['count']/$this->notesOnPage);
        if($this->page==1){ $navigationPage="<div> ";}
        else{ $pageDown=$this->page-1; $navigationPage="<div> <a href='?=page$pageDown/'>назад  </a>";}
        if($this->page>3 and $this->page<($pageCount-3)){$pageStart=$this->page-3; $pageFinish = $this->page+3;}
        elseif ($this->page>3){
            $pageStart=$this->page;
            if(($this->page+3)>$pageCount){$pageFinish=$pageCount;}else{$pageFinish=$this->page+3;}
        }
        else{$pageStart=1;
            if(($this->page+3)>$pageCount){$pageFinish=$pageCount;}else{$pageFinish=$this->page+3;}}
        for($i=$pageStart; $i<=$pageFinish; $i++){
            if($i==$this->page){ $navigationPage=$navigationPage."<a href='?=page$i/' class='paginationNum click'>$i</a>  ";}
            else{ $navigationPage=$navigationPage."<a href='?=page$i/' class='paginationNum'>$i</a>  ";}
        }
        if($this->page==$pageCount){$navigationPage=$navigationPage."</div>";}
        else{$pageNext=$this->page+1; $navigationPage=$navigationPage."<a href='?=page$pageNext/'> следующая</a></div>";}

        return $navigationPage;
    }
}