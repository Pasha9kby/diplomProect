<?php


namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller
{
    private $pages;

    public function __construct(){
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    }

    public function show1()
    {
        echo '1';
    }

    public function show2()
    {
        echo '2';
    }

    public function act(){
        return $this->render('page/act', [
            'var1' => 'eee',
            'var2' => 'bbb',
            'var3' => 'kkk',
        ]);
    }

    public function show($params){
        $this->title=$this->pages[$params['n']]['title'];
        return $this->render('page/show', ['content'=>$this->pages[$params['n']]['text']]);
    }

    public function test(){
        $page=new Page;

        $data = $page->getById(3); // получим запись с id=3
        var_dump($data);

//        $data = $page->getAll(); // получим запись с id=3
//        var_dump($data);
    }


}