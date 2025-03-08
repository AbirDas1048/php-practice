<?php

echo "Read directory from current working directory" . PHP_EOL;
$entries = opendir(getcwd());

while(false !== ($entry = readdir($entries))) {
    echo $entry . PHP_EOL;
}

echo PHP_EOL . "Read directory from root of current working directory" . PHP_EOL;

$entries2 = opendir(dirname(getcwd()));

while(false !== ($entry = readdir($entries2))) {
    echo $entry . PHP_EOL;
}