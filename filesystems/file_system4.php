<?php
/***
 * mkdir() stands for make directory.
 * It takes four parameters (directory name, permissions, recursive, context)
 */

// For create a single directory
mkdir('test_file_system');
sleep(2);

// For create a recursive directory. Directory inside directory
mkdir('test_file_system2/t1/t2/t3/t4/t5', 0777, true);
sleep(2);

// For create a file with content in a specific directory
file_put_contents('test_file_system2/t1/t2/test.txt', 'test');
sleep(2);

file_put_contents('test_file_system2/t1/t2/t3/t4/t5/test.txt', 'test');
sleep(2);

/***
 * For remove directory we use rmdir().
 * But if it's not empty, it will throw error.
 * So we need to unlink the file.
*/
unlink('test_file_system2/t1/t2/t3/t4/t5/test.txt');
sleep(2);
rmdir('test_file_system2/t1/t2/t3/t4/t5');