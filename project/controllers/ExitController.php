<?php

namespace Project\Controllers;
use Core\Controller;



class ExitController extends Controller
{
    public function exit(){
        $this->title="exit";
        return $this->render('exit/exit');
    }
}