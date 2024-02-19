<?php


namespace Project\Models;
use \Core\Model;

class Employerlist extends Model
{
    public function queryCount() {
        $queryCount="SELECT COUNT(*) as count FROM firma";
    }

    public function queryArray() {
        $queryArray="SELECT * FROM firma
                          LEFT JOIN tip_clienta
                          ON id_tip_clienta = 4 
                          LEFT JOIN country
                          ON country_id = id_country ";
    }

}