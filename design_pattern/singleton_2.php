<?php


class FileWriter{
    private static $instances = [];
    private $fileName;
    private function __construct($fileName){
        $this->fileName = $fileName;
    }
    public static function getInstance($fileName): FileWriter
    {
        if(!isset(self::$instances[$fileName])){
            self::$instances[$fileName] = new FileWriter($fileName);
        }
        return self::$instances[$fileName];
    }

    public function write($data): void
    {
        echo "Writing data to file: $data\n";
    }

    public static function getAllInstances(): void
    {
        print_r(self::$instances);
    }
}

$writer1 = FileWriter::getInstance('file1.txt');
$writer2 = FileWriter::getInstance('file2.txt');

$writer1->write('Data 1');
$writer2->write('Data 2');

FileWriter::getAllInstances();
