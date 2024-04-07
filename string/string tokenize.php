<?php

$string = "The quick brown fox jumps over the lazy dog";
$string2 = "Loves to travel,coding,learning";

$parts = explode(" ", $string);

print_r($parts);
echo PHP_EOL;

$original = implode(" ", $parts);

print_r($original);
echo PHP_EOL;

$alphabet = str_split($string);
print_r($alphabet);
echo PHP_EOL;

$token = strtok($string, " ");
while ($token !== false) {
    echo $token . "\n";
    $token = strtok(" ");
}

$parts_by_regex = preg_split("/ |,/", $string2);
print_r($parts_by_regex);
echo PHP_EOL;
