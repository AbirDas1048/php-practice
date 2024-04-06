<?php

$string = "Hello World";
echo substr($string, 3) . PHP_EOL;
echo substr($string, 3, 4) . PHP_EOL;
echo substr($string, 3, -2) . PHP_EOL;
echo substr($string, -8) . PHP_EOL;
echo substr($string, -8, 5) . PHP_EOL;
echo substr($string, -8, -2) . PHP_EOL;
