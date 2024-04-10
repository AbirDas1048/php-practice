<?php
$file_name = getcwd() . "/file_handling/data/friend2.txt";

$fp = fopen($file_name, 'w');

fwrite($fp, "Shajid\n");
fwrite($fp, "Nishat\n");
fwrite($fp, "Rafi\n");

fclose($fp);
