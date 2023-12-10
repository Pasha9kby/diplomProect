<?php
namespace Project\Controllers;
use core\controller;
use Project\Klass\Pagination\Pagination;
use Project\Models\Vacancy;

class VacancyController extends Controller
{
    public $title = "список вакансий";

    public function showAll($idfirms, $params){
        $queryCount=(new Vacancy())->countvacancy();
        $queryArray=(new Vacancy())->vacancylist();
        $page=explode('page', $params['page']);
        $page=$page[1];
        $userlist=(new Pagination($page))->users($queryArray);
        $navigationPage=(new Pagination($page))->pageCount($queryCount);
        return $this->render('employerlist/show', ['userlist'=>$userlist,
            'navigationPage'=>$navigationPage]);
    }
}