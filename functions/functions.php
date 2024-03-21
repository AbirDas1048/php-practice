<?php

function isEven($n)
{
    return (($n % 2 == 0) ? true : false);
}

/*
    Type Hinting Example
*/

function factorial(int $factorial)
{
    $result = 1;

    for ($i = $factorial; $i >= 1; $i--) {
        $result = $result * $i;
    }

    return $result;
}
