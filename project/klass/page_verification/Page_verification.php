<?php
namespace Project\Klass\Page_verification;


class Page_verification
{
    public function __construct()
    {
        $url = explode('/', $_SERVER["REQUEST_URI"]);
        if(empty($_SESSION['id'])){
            if((strlen($url[1])>0) and $url[1]!='registration'){ 
                $new_url='/';
                header('Location: ' . $new_url);
                exit;}
         }        
    }
}
?>