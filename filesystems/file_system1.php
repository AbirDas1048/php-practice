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

foreach ($scan_dir as $item){
    if($item != "." && $item != ".."){
        if(is_dir($get_parent_dir_of_current_working_dir."/".$item)){
            echo "[d] => $item" . PHP_EOL;
        }else{
            echo "[f] => $item" . PHP_EOL;
        }
    }
}

function countDir($dir): int
{
    $count = 0;
    $scan_dir = scandir($dir);

    foreach ($scan_dir as $item){
        if($item != "." && $item != ".."){
            if(is_dir($dir."/".$item)){
                $count++;
            }
        }
    }
    return $count;
}


echo PHP_EOL;
echo "Total Directory " . countDir(dirname(getcwd())) . PHP_EOL;
