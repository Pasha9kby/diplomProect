<?php

namespace Project\Class;

class Get_age
{
    public function get_age( $birthday ){

        $diff = date( 'Ymd' ) - date( 'Ymd', strtotime($birthday) );

        return substr( $diff, 0, -4 );
    }
}