<?php

function getUidByPassengerId( $passengerId, $role = 3  )
{
    return $passengerId & ~( 0xFFFF << 48 ) | ( $role << 48 );
}

var_dump(getUidByPassengerId('1347855'));

