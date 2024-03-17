<?php

$decimal = 1048; // Decimal number
$binary = 0b100010; // Binary number
$octal = 027; // Octal number
$hexa = 0x2A; // Hexadecimal number

/*
    For equivalent decemial number
*/
var_dump($decimal); // Output: int(1048)
var_dump($binary); // Output: int(34)
var_dump($octal); // Output: int(23)
var_dump($hexa); // Output: int(42)

// All number in decimal
printf("%d %d %d %d \n", $decimal, $binary, $octal, $hexa); // Output: 1048 34 23 42

// All number in binary
printf("%b %b %b %b \n", $decimal, $binary, $octal, $hexa); // Output: 10000011000 100010 10111 101010

// All number in octal
printf("%o %o %o %o \n", $decimal, $binary, $octal, $hexa); // Output: 2030 42 27 52 

// All number in hexadecimal
printf("%X %X %X %X \n", $decimal, $binary, $octal, $hexa); // Output: 418 22 17 2A
