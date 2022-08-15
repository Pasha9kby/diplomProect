<?php


namespace Project\Controllers;
use \Core\Controller;


class RegistrationController extends Controller
{
    public $title = "registration";

    public function show()
    {
        return $this->render('registration/show');
    }

    public function error()
    {
        return $this->render('registration/error');
    }
}