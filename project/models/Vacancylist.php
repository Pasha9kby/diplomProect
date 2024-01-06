<?php


namespace Project\Models;
use Core\Model;


class Vacancylist extends Model
{
    public function countvacancy($idfirma){
        if($_SESSION['status']==4){
            $queryCount="SELECT COUNT(*) as count FROM work where firma_id = $_SESSION[id] ";
        }
        else {
            if(isset($idfirma)){
                $queryCount="SELECT COUNT(*) as count FROM work where firma_id = $idfirma";
            }
            else {
                $queryCount="SELECT COUNT(*) as count FROM work ";
            }
        }
        return $queryCount;
    }

    public function vacancylist($idfirma){
        if($_SESSION['status']==4){
            $queryArray="SELECT * FROM work WHERE firma_id=$idfirma";
        }
        else {
            if(isset($idfirma)){
                $queryArray="SELECT * FROM work WHERE firma_id=$idfirma
                          LEFT JOIN firma
                          ON id_firma = $idfirma";
            }
            else {
                $queryArray="SELECT * FROM work WHERE
                          LEFT JOIN firma
                          ON id_firma = $idfirma";
            }
        }
    return $queryArray;
    }


}