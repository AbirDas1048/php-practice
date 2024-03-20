<?php

$default_value = 10;
$user_input_value = NULL;

// By ternary opertor
$result1 = isset($user_input_value) ? $user_input_value : $default_value;

// By null coalesce opertor
$result2 = $user_input_value ?? $default_value;

printf("Result1 value is {$result1} and Result2 value is {$result2}");
