<?php

$file_name = getcwd() . "/file_handling/data/friend3.txt";

file_put_contents($file_name, "Sanjoy\n"); // It removes all previous data from the file
file_put_contents($file_name, "Joy\n");

file_put_contents($file_name, "Pranta\n", FILE_APPEND); // It keeps the previous data of the file
file_put_contents($file_name, "Ashu\n", FILE_APPEND);

file_put_contents($file_name, "Rony\n", FILE_APPEND | LOCK_EX); // LOCK_EX lock the file when a user write content on this file. On that time other user can not change anything of that file.
file_put_contents($file_name, "Srejon\n", FILE_APPEND | LOCK_EX);
