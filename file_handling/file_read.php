<?php

$file_name = getcwd() . "/file_handling/data/friend.txt";
if (is_readable($file_name)) {

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

    echo PHP_EOL;

    fseek($fp, 14); // move the cursor in a specific point of the file

    // get all the line
    while ($line3 = fgets($fp, 5)) {
        echo $line3 . '-';
    }

    echo PHP_EOL;

    fseek($fp, -1, SEEK_END);
    $line4 = fgets($fp); // Nothing will get. because cursor is end of the file
    echo $line4 . "After print line4";

    echo PHP_EOL;

    $data = file($file_name); // It will return all line in an array of a file.
    print_r($data);

    echo PHP_EOL;

    $content = file_get_contents($file_name); // It will return all content of a file.
    echo $content;

    echo PHP_EOL;

    fclose($fp);
}
