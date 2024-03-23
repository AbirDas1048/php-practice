<?php

$factorial = 6;

/* 
    Example 1
*/
$result = 1;

for ($i = $factorial; $i >= 1; $i--) {
    $result = $result * $i;
}

printf("The factorial of {$factorial} is {$result}\n");

/* 
    Example 2 by recursive function
*/

include_once "functions/functions.php";

printf("The factorial of {$factorial} is " . factorialWithRecursion($factorial) . "\n");
