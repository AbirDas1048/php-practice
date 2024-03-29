<?php

$number = range(11, 20);
print_r($number);

echo array_rand($number) . "\n"; // It will return a random key from $number array.

$random_number = mt_rand(0, 9);

echo $number[$random_number] . "\n";

shuffle($number); // It will shuffle the whole array.
print_r($number);
