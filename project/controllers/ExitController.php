<?php


namespace Project\Controllers;
use Core\Controller;




class ExitController extends Controller
{
    public function exit(){
        session_destroy();

        return $this->render('');
    }
}