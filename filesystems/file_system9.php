<?php

echo "Creating directory structure and files start" . PHP_EOL;
 mkdir('test_file_system/t1/t2/t3/t4/t5', 0777, true);
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
echo "Creating file structure and files end" . PHP_EOL;
sleep(2);

$source = getcwd() . DIRECTORY_SEPARATOR . 'test_file_system';
$destination = getcwd() . DIRECTORY_SEPARATOR . 'test_file_system2';
[$file_count, $dir_count] = copyDir($source, $destination);
echo "Total $file_count files and $dir_count directories has been copied" . PHP_EOL;
function copyDir($source, $destination){
    echo "Copying files start" . PHP_EOL;
    $file_count = 0;
    $dir_count = 1;
    $source = rtrim($source, '/');
    $destination = rtrim($destination, '/');

    if(!file_exists($destination)){
        mkdir($destination);
    }
    foreach (scandir($source) as $file) {
        if($file != "." && $file != ".."){
            $source = $source . DIRECTORY_SEPARATOR . $file;
            $destination = $destination . DIRECTORY_SEPARATOR . $file;

            if(is_dir($source)){
                $count = copyDir($source, $destination);
                $file_count += $count[0];
                $dir_count += $count[1];
            }elseif (is_file($source)){
                $file_count++;
                copy($source, $destination);
            }
        }
    }
    echo "Copying files end" . PHP_EOL;
    return [$file_count, $dir_count];
}