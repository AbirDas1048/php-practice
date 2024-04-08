<?php

$string = "Abir Das";

$parts = sscanf($string, "%s %s");

print_r($parts);

echo PHP_EOL;

sscanf($string, "%s %s", $first_name, $last_name);

echo "My name is {$first_name} {$last_name}";
