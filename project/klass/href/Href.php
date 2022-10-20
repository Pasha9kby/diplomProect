<?php


namespace Project\Klass\Href;


class Href
{
    private $href=array();

    public function href($path, $name, $klass){
        $array['path']=$path;
        $array['name']=$name;
        $array['klass']=$klass;
        $this->href[]=$array;
        return $this;
    }

    public function listHref(){
        foreach ($this->href as $item){
           $href[]="<a href='$item[path]' class='$item[klass]'>$item[name]</a><br>";
        }
        $hrefList=implode($href);
        return $hrefList;
    }
}