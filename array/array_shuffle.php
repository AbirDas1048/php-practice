<?php

$number = range(11, 20);
print_r($number);

$random_number = mt_rand(0, 9);

echo $number[$random_number] . "\n";

shuffle($number);
print_r($number);
