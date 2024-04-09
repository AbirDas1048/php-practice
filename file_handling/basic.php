<?php

$file_name = getcwd() . "/file_handling/data/friend.txt";
$fp = fopen($file_name, 'r');
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;

fclose($fp);
