<?php

$m = 7;
$n = 5;

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
