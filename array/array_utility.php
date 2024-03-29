<?php

$numbers_array = [1, 2, 3, 4, 5, 6, 7];

function powerWithPrint($n, $key, $power)
{
    printf("The value of {$n} to the power {$power} is %s\n", $n ** $power);
}

function powerWithReturn($n)
{
    $power = 3;
    return $n ** $power;
}

function odd($n)
{
    return $n % 2 == 1;
}

function even($n)
{
    return $n % 2 == 0;
}

function sum($old_value, $new_value)
{
    return $old_value + $new_value;
}

array_walk($numbers_array, 'powerWithPrint', 2);

$power_array = array_map('powerWithReturn', $numbers_array);
print_r($power_array);

$odd_array = array_filter($numbers_array, 'odd');
print_r($odd_array);

$even_array = array_filter($numbers_array, 'even');
print_r($even_array);

$sum_of_numbers_array = array_reduce($numbers_array, 'sum');
print_r($sum_of_numbers_array);
