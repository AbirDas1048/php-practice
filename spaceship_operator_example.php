<?php

$m = 5;
$n = 5;

/* 
    Example 1
*/
function greaterOrSmaller($x, $y)
{
    if ($x > $y) :
        $check_result = 1;
    elseif ($x == $y) :
        $check_result = 0;
    elseif ($x < $y) :
        $check_result = -1;
    endif;

    return $check_result;
}

if (greaterOrSmaller($m, $n) == 1) :
    printf("{$m} is greater than {$n}");
elseif (greaterOrSmaller($m, $n) == 0) :
    printf("{$m} is equal to {$n}");
elseif (greaterOrSmaller($m, $n) == -1) :
    printf("{$m} is smaller than {$n}");
endif;

echo "\n";
/* 
    Example 2
    By Spaceship Operator
*/

$result = $m <=> $n;
if ($result == 1) :
    printf("{$m} is greater than {$n}");
elseif ($result == 0) :
    printf("{$m} is equal to {$n}");
elseif ($result == -1) :
    printf("{$m} is smaller than {$n}");
endif;
