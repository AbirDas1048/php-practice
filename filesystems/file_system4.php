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

// Make a delete directory method with unlinking the files
file_put_contents('test_file_system2/t1/t2/t3/t4/test.txt', 'test');
file_put_contents('test_file_system2/t1/t2/t3/t4/test2.txt', 'test');
file_put_contents('test_file_system2/t1/t2/t3/t4/test3.txt', 'test');
sleep(2);

deleteDir(getcwd() . DIRECTORY_SEPARATOR . 'test_file_system2/t1/t2/t3/t4');
function deleteDir($path): void
{
    $files = scandir($path);
    if(count($files) > 2){
        foreach($files as $file){
            if($file != "." && $file != ".."){
                unlink($path.DIRECTORY_SEPARATOR.$file);
            }
        }
    }
    rmdir($path);
}
