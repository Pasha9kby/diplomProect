<?php


namespace Project\Controllers;
use Core\Controller;

class NumController extends Controller
{
    public function sum($num){
        echo $num['n1']+$num['n2']+$num['n3'];
    }
}