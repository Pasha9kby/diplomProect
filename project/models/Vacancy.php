<?php


namespace Project\Models;
use Core\Model;


class Vacancy extends Model
{
    public function countvacancy(){
        $queryCount="SELECT COUNT(*) as count FROM vacancy";
        return $queryCount;
    }

    public function vacancylist($idfirma){
        if(isset($idfirma)){
            $queryArray="SELECT * FROM vacancy WHERE firma_id=$idfirma
                          LEFT JOIN firma
                          ON id_firma = $idfirma";
        }
        else {
            $queryArray="SELECT * FROM vacancy
                          LEFT JOIN firma
                          ON firma_id = id_firma";
        }
    return $queryArray;
    }


}