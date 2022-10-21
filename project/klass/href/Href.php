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
            if($_SERVER["REQUEST_URI"]==$item['path']){
                $hrefArray[]= "<a href='$item[path]' class='$item[klass] currentPage'>$item[name]</a>";
            } else{
                $hrefArray[]= "<a href='$item[path]' class='$item[klass]'>$item[name]</a>";
            }
        }
        $href= implode('<br>', $hrefArray);
        return $href;
    }
}