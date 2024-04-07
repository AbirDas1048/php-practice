<?php

$string = "The quick brown fox jumps over the lazy dog";

$parts = explode(" ", $string);

print_r($parts);
echo PHP_EOL;

$original = implode(" ", $parts);

print_r($original);
echo PHP_EOL;
