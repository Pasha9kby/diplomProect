<?php


namespace Project\Klass\UserInfo;
use Core\Model;

class UserInfo extends Model
{
    public function userInfo($id){
        $query="SELECT * FROM klient WHERE id_client=$id";
        $user = $this->findOne($query);

        $info="
<div class='userInfo'>
     <div>Вы вошли как $user[imy] $user[familia]</div>  

</div>
        ";
        return $info;
    }
}