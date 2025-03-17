<?php
$dir  = new DirectoryIterator(dirname(getcwd()));
foreach ($dir as $file){
    if ($file->isDot()){
        continue;
    }

    if ($file->isDir()){
        echo "[d] => " . $file->getFilename() . PHP_EOL;
    }else{
        echo "[f] => " . $file->getFilename() . " & size => " . $file->getSize() . PHP_EOL;
    }
}