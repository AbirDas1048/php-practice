<?php

$first_number = 0;
$second_number = 1;
$n = 20;

for ($i = 0; $i < $n; $i++) {
    printf("{$first_number} ");
    $result = $first_number + $second_number;
    $first_number = $second_number;
    $second_number = $result;
}
