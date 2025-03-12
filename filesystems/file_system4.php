<?php
/***
 * mkdir() stands for make directory.
 * It takes four parameters (directory name, permissions, recursive, context)
 */

// For create a single directory
mkdir('test_file_system');

// For create a recursive directory. Directory inside directory
mkdir('test_file_system2/t1/t2/t3/t4/t5', 0777, true);