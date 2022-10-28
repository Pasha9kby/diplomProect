<?php


namespace Project\Klass\postOrMassive;


class PostOrMassive
{
    public function postOrMassive ($post, $massive, $placeholder){
        if(isset($post)){
            if(!empty($post)){
                $value="value='$post'";
            }
        }
        elseif (!empty($massive)){
            $value="value='$massive'";
        }
        else { $value = "placeholder='$placeholder'";}
        return $value;
    }

    function postOrMassiveForSelect($post, $massive){
        if(!empty($post)){
            $value=$post;
        }
        elseif (!empty($massive)){
            $value=$massive;
        }
        else { $value = null;}
        return $value;
    }
}