<?php


namespace Project\Controllers;
use core\controller;



class InputController extends Controller
{
    public $title = "страница входа";

    public function show(){
        return $this->render('input/show');
//        echo "ПРИВЕТ ВСЕ ХОРОШО";
    }
}