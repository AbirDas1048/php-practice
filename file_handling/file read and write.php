<?php

$file_name = getcwd() . "/file_handling/data/friend2.txt";

$fp = fopen($file_name, 'r+');

$line = fgets($fp);
echo $line;

fwrite($fp, "Bashar\n");

$line = fgets($fp);
echo $line;

fclose($fp);
