<?php
$file_name = getcwd() . "/file_handling/data/friend2.txt";

$fp = fopen($file_name, 'w');

fwrite($fp, "Shajid\n");
fwrite($fp, "Nishat\n");
fwrite($fp, "Rafi\n");

fclose($fp);

/*
    It always remove the previous data from the file.

    To keep the previous data from the file.
*/

// Example 1

$previous_data = file_get_contents($file_name); // It gets the all previous data from the file

$fp = fopen($file_name, 'w');

fwrite($fp, $previous_data); // First it write the previous data on the file
fwrite($fp, "Joy\n");
fwrite($fp, "Pranta\n");
fwrite($fp, "Ashu\n");

fclose($fp);

// Example 2

$fp = fopen($file_name, 'a'); // This will be open the file in append mood

fwrite($fp, "Sanjoy\n");
fwrite($fp, "Rony\n");
fwrite($fp, "Srejon\n");

fclose($fp);
