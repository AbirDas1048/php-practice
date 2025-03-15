<?php

echo "Creating directory structure start" . PHP_EOL;
mkdir('test_file_system/t1/t2/t3/t4/t5', 0777, true);
echo "Creating directory structure end" . PHP_EOL;
sleep(2);
echo "Creating file structure start" . PHP_EOL;
file_put_contents('test_file_system/test1.txt', 'test');
file_put_contents('test_file_system/test2.txt', 'test');
file_put_contents('test_file_system/t1/test1.txt', 'test');
file_put_contents('test_file_system/t1/test2.txt', 'test');
file_put_contents('test_file_system/t1/t2/test1.txt', 'test');
file_put_contents('test_file_system/t1/t2/test2.txt', 'test');
file_put_contents('test_file_system/t1/t2/t3/test1.txt', 'test');
file_put_contents('test_file_system/t1/t2/t3/test2.txt', 'test');
file_put_contents('test_file_system/t1/t2/t3/t4/test1.txt', 'test');
file_put_contents('test_file_system/t1/t2/t3/t4/test2.txt', 'test');
file_put_contents('test_file_system/t1/t2/t3/t4/t5/test1.txt', 'test');
file_put_contents('test_file_system/t1/t2/t3/t4/t5/test2.txt', 'test');
echo "Creating file structure end" . PHP_EOL;
sleep(2);

deleteDir(getcwd() . DIRECTORY_SEPARATOR . 'test_file_system');
function deleteDir($path): void
{
    sleep(2);
    if(!is_readable($path)){
        return;
    }
    $files = scandir($path);
    if(count($files) > 2){
        foreach($files as $file){
            if($file != "." && $file != ".."){
                $file_path = $path . DIRECTORY_SEPARATOR . $file;
                if(is_dir($file_path)){
                    deleteDir($file_path);
                }else{
                    echo "Unlinking file path $file_path start" . PHP_EOL;
                    unlink($file_path);
                    echo "Unlinking file path $file_path end" . PHP_EOL;
                }
            }
        }
    }
    echo "Remove directory $path start" . PHP_EOL;
    rmdir($path);
    echo "Remove directory $path end" . PHP_EOL;
}
