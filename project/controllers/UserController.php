<?php


namespace Project\Controllers;
use Core\Controller;

class UserController extends Controller
{
    private $users;

     public function __construct(){
         $this->users=[
             1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
             2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
             3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
             4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
             5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
         ];
     }

     public function show($params){
         var_dump($this->users[$params['id']]['name']);
     }

     public function info($params){
         var_dump($this->users[$params['id']][$params['key']]);
         //var_dump($params);
     }

     public function all(){
         foreach ($this->users as $num => $value){
             echo $num." имя: ".$value['name']." возраст: ".$value['age']." зарплата: ".$value['salary']."<br>";
         }
     }

     public function first($params){
         for ($i=1; $i<=$params['n']; $i++){
             echo $i."имя: ".$this->users[$i]['name'].", возраст:".$this->users[$i]['age'].", зарплата: ".$this->users[$i]['salary']."<br>";
         }
     }


}