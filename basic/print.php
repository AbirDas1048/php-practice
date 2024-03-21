<?php

$first_name = 'Abir';
$last_name = 'Das';
$code = 1048;
$pi = 3.141592653589793; // 15 decimal places

var_dump($first_name); // Output: string(4) "Abir"

printf("My name is %s %s\n", $first_name, $last_name); // Output: My name is Abir Das

// By variable swapping
printf('My name is %2$s %1$s' . "\n", $last_name, $first_name); // Output: My name is Abir Das

printf('My code in decimal format: %1$d. In binary format: %1$b. In octal format: %1$o. In hexadecimal format: %1$X.' . "\n", $code);
/*
    Output: My code in decimal format: 1048. In binary format: 10000011000. In octal format: 2030. In hexadecimal format: 418.
*/

printf("Value of PI with 4 decimal places %.4f\n", $pi);
/*
    Output: Value of PI with 4 decimal places 3.1416
*/

// Show number value with padding
printf("My code starting with 0 padding %06d\n", $code);
/*
    Output: My code starting with 0 padding 001048
*/
printf("The value of PI starting with 0 padding and 5 decimal places %09.5f\n", $pi);
/*
    Output: The value of PI starting with 0 padding and 5 decimal places 003.14159
*/

// Use of sprintf
$output = sprintf("My name is %s %s\n", $first_name, $last_name);
echo $output; // Output: My name is Abir Das
