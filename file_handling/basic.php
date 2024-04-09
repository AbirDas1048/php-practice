<?php

$file_name = getcwd() . "/file_handling/data/friend.txt";
$fp = fopen($file_name, 'r');
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
$line = fgets($fp, 4); // Limit to read the number of character
echo $line;

echo PHP_EOL;

rewind($fp); // move the cursor to first of the file

// get all the line
while ($line2 = fgets($fp)) {
    echo $line2;
}

fclose($fp);
