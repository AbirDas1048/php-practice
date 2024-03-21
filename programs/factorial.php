<?php

$factorial = 6;
$result = 1;

for ($i = $factorial; $i >= 1; $i--) {
    $result = $result * $i;
}

printf("The factorial of {$factorial} is {$result}");
