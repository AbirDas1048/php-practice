<?php

/***
 * glob() used for find file and directories with a specific pattern
 */

print_r(glob('./*')); // For all directories and files of the current working directory

print_r(glob('/*', GLOB_ONLYDIR)); // For all directories of the current working directory
print_r(glob('/A*', GLOB_ONLYDIR)); // For all directories and start with A of the current working directory
print_r(glob('/*A*', GLOB_ONLYDIR)); // For all directories and anywhere with A of the current working directory
print_r(glob('/{A,w}*', GLOB_ONLYDIR | GLOB_BRACE)); // For all directories and start with A, w of the current working directory
print_r(glob('/*{A,w}*', GLOB_ONLYDIR | GLOB_BRACE)); // For all directories and anywhere with A, w of the current working directory

print_r(glob('/php & laravel course/PHP-Practice/*/*/*/*.txt')); // For specific directories and anywhere with txt file. Here * use it for level up.
print_r(glob('/php & laravel course/PHP-Practice/*/*/*/*[!.txt]')); // For specific directories and anywhere without txt file. Here * use it for level up.