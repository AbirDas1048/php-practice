<?php

// Alternative syntax for control structures

/*
    Example 1
*/
$n = 15;

if ($n % 2 == 0) :
    printf("{$n} is an even number");
else :
    printf("{$n} is a odd number");
endif;

echo "\n";

/*
    Example 2
*/
switch ($n):
    case ($n % 2 == 0):
        printf("{$n} is an even number");
        break;
    default:
        printf("{$n} is a odd number");
endswitch;
