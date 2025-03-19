<?php
const FILENAME = 'H:\php & laravel course\PHP-Practice\filesystems\file_system8.php';

echo "Base Name " . pathinfo(FILENAME, PATHINFO_BASENAME) . PHP_EOL;
echo "Directory Name " . pathinfo(FILENAME, PATHINFO_DIRNAME) . PHP_EOL;
echo "File Name " . pathinfo(FILENAME, PATHINFO_FILENAME) . PHP_EOL;
echo "File Extension " . pathinfo(FILENAME, PATHINFO_EXTENSION) . PHP_EOL;