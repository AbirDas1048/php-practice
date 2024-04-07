<?php

$string = "  Hello \n";
$string1 = "World";

echo $string . $string1 . PHP_EOL;

$string2 = trim($string);
echo $string2 . $string1 . PHP_EOL;

$string3 = trim($string, " ");
echo $string3 . $string1 . PHP_EOL;

$string4 = trim($string, "\n");
echo $string4 . $string1 . PHP_EOL;

$string5 = trim($string, " \n");
echo $string5 . $string1 . PHP_EOL;

$string6 = ltrim($string);
echo $string6 . PHP_EOL;

$string7 = rtrim($string);
echo $string7 . PHP_EOL;
