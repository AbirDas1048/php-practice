<?php

$file_name = getcwd() . "/file_handling/data/friend2.txt";

// Example 1

$fp = fopen($file_name, 'r+');

$line = fgets($fp);
echo $line;

fwrite($fp, "Bashar\n");

$line = fgets($fp);
echo $line;

fclose($fp);

// Example 2

$fp = fopen($file_name, 'r+');

fseek($fp, -1, SEEK_END); // Move the cursor last of the file

fwrite($fp, "\nSakib\n");

fclose($fp);
