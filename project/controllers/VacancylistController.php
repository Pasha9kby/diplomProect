<?php
namespace Project\Controllers;
use core\controller;
use Project\Klass\Pagination\Pagination;
use Project\Models\Vacancylist;
use Project\Models\Vacancy;
use Project\Klass\Page_verification\Page_verification;


new Page_verification();

class VacancylistController extends Controller
{
    public $title = "список вакансий";

    public function showMain($idfirms, $params){
        $queryCount=(new Vacancylist())->countvacancy($idfirms);
        $queryArray=(new Vacancylist())->vacancylist($idfirms);
        $page=explode('page', $params['page']);
        $page=$page[1];
        $userlist=(new Pagination($page))->users($queryArray);
        $navigationPage=(new Pagination($page))->pageCount($queryCount);
        return $this->render('vacancylist/show', ['userlist'=>$userlist,
            'navigationPage'=>$navigationPage]);
    }
}