<?php
$rdi = new recursiveDirectoryIterator(dirname(getcwd()), recursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($rdi);
$size = 0;

foreach ($files as $file){
    //echo $file->getPathname().DIRECTORY_SEPARATOR.$file->getFilename().PHP_EOL;

    if($file->isFile()){
        $size += $file->getSize();
    }

    if($file->getFileName() == 'info.php'){
        echo $file->getPathname().DIRECTORY_SEPARATOR.$file->getFilename().PHP_EOL;
    }


}

echo "Total size is: $size bytes".PHP_EOL;