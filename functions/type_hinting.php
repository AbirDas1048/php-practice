<?php

include_once "functions.php";

$n = "abv";
$factorial = is_numeric($n) ? factorial($n) : "Invalid Number";
printf("Factorial of {$n} is {$factorial}");
