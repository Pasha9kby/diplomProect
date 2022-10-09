<?php


namespace Project\Klass\Age_to_str;


class Age_to_str
{
    public function AgeToStr($Age)
    {
        $str='';
        $num=$Age>100 ? substr($Age, -2) : $Age;
        if($num>=5&&$num<=14) $str = "лет";
        else
        {
            $num=substr($Age, -1);
            if($num==0||($num>=5&&$num<=9)) $str='лет';
            if($num==1) $str='год';
            if($num>=2&&$num<=4) $str='года';
        }
        return ' '.$str;
    }
}