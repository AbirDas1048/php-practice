<?php

$file_name = getcwd() . "/file_handling/data/friend3.txt";

// Example 1

$fp = fopen($file_name, 'r+');

$line = fgets($fp);
echo $line;

fwrite($fp, "Bashar\n");

$line = fgets($fp);
echo $line;

echo PHP_EOL . "Example 1 ends" . PHP_EOL;

fclose($fp);

// Example 2

$fp = fopen($file_name, 'r+');

fseek($fp, -1, SEEK_END); // Move the cursor last of the file

fwrite($fp, "\nSakib\n");

fclose($fp);

// Example 3

$fp = fopen($file_name, 'w+'); // It removes all previous data from the file

fwrite($fp, "Sakib\n");

$data = file_get_contents($file_name);
echo $data;

echo PHP_EOL . "Example 3 ends" . PHP_EOL;

fclose($fp);

// Example 4

$fp = fopen($file_name, 'a+'); // It keeps the cursor last of the file

fwrite($fp, "Habib\n");

$data = file_get_contents($file_name);
echo $data;

echo PHP_EOL . "Example 4 ends" . PHP_EOL;

fclose($fp);
