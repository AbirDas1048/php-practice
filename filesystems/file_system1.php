<?php
// getcwd() Get current working directory
echo PHP_EOL;
$get_current_working_dir = getcwd();
echo $get_current_working_dir . PHP_EOL;

// dirname() this function will return the parent directory's path that is levels up from the current directory.
echo PHP_EOL;
$get_parent_dir_of_current_working_dir = dirname($get_current_working_dir);
echo $get_parent_dir_of_current_working_dir . PHP_EOL;
echo dirname($get_current_working_dir, 2) . PHP_EOL;

// scandir() List files and directories inside the specified path
echo PHP_EOL;
$scan_dir = scandir($get_parent_dir_of_current_working_dir);
print_r($scan_dir);
echo PHP_EOL;