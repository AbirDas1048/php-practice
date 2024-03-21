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

/*
    Optional Parameter Example
*/

function maxNumber($number1, $number2 = 0)
{
    $result = $number1 <=> $number2;

    if ($result == 1) :
        return printf("{$number1} is greater than {$number2}");
    elseif ($result == 0) :
        return printf("{$number1} is equal to {$number2}");
    elseif ($result == -1) :
        return printf("{$number1} is smaller than {$number2}");
    endif;
}
