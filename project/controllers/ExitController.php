<?php


namespace Project\Controllers;
use Core\Controller;



class ExitController extends Controller
{
    public function exit(){
        session_destroy();
        $this->title="exit";
        return $this->render('exit/exit');
    }
}