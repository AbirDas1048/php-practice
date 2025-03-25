<?php
interface BaseStorage{
    public function setFileName($file_name);
    public function setMode($mode);
    public function writeData($data);
    public function readData();
}

class Storage implements BaseStorage{
    private $file_name;
    private $mode;
    public function __construct($file_name, $mode = null){
        $this->setFileName($file_name);
        $this->setMode($mode);
    }

    public function setFileName($file_name): void
    {
        $this->file_name = $file_name;
    }

    public function setMode($mode): void{
        $this->mode = $mode;
    }

    public function writeData($data): void
    {
        file_put_contents($this->file_name, $data, $this->mode);
    }

    public function readData(){
        echo file_get_contents($this->file_name) . PHP_EOL;
    }
}

class StorageManager{
    public function saveAndShowData(BaseStorage $storage, $data){
        $storage->writeData($data);
        $storage->readData();
    }
}

$file = 'data/test.txt';

echo "FILE WRITE WITH NEW DATA" . PHP_EOL;

$strg = new Storage($file);
$strgMngr = new StorageManager();
$strgMngr->saveAndShowData($strg, '1 Test ');

echo "FILE WRITE WITH NEW DATA AGAIN" . PHP_EOL;

$strg = new Storage($file);
$strgMngr->saveAndShowData($strg, '2 Test ');

echo "FILE WRITE WITH OLD DATA" . PHP_EOL;

$strg = new Storage($file, FILE_APPEND);
$strgMngr->saveAndShowData($strg, '3 Test ');

echo "FILE WRITE WITH OLD DATA AGAIN" . PHP_EOL;

$strg = new Storage($file, FILE_APPEND);
$strgMngr->saveAndShowData($strg, '4 Test ');
