<?php
/***
 * Interface Injection
 * The dependency is injected via an interface that the class implements.
 * This is less common in PHP but is useful when enforcing a contract.
 */


interface BaseStorage
{
    public function writeData($data);

    public function readData();
}

interface StorageAwareInterface
{
    public function setStorage(BaseStorage $storage);
}

class Storage implements BaseStorage
{
    private $file_name;
    private $mode;

    public function __construct($file_name, $mode = null)
    {
        $this->file_name = $file_name;
        $this->mode = $mode;
    }

    public function writeData($data): void
    {
        file_put_contents($this->file_name, $data, $this->mode);
    }

    public function readData()
    {
        echo file_get_contents($this->file_name) . PHP_EOL;
    }
}

class StorageManager implements StorageAwareInterface
{
    private $storage;

    public function setStorage(BaseStorage $storage)
    {
        $this->storage = $storage;
    }

    public function saveAndShowData($data)
    {
        if (!$this->storage) {
            throw new Exception("Storage is not set.");
        }
        $this->storage->writeData($data);
        $this->storage->readData();
    }
}

// Usage
$file = 'data/test.txt';

echo "FILE WRITE WITH NEW DATA" . PHP_EOL;

$strg = new Storage($file);
$strgMngr = new StorageManager();
$strgMngr->setStorage($strg);
$strgMngr->saveAndShowData('1 Test ');

echo "FILE WRITE WITH NEW DATA AGAIN" . PHP_EOL;

$strgMngr->saveAndShowData('2 Test ');

echo "FILE WRITE WITH OLD DATA" . PHP_EOL;

$strg = new Storage($file, FILE_APPEND);
$strgMngr->setStorage($strg);
$strgMngr->saveAndShowData('3 Test ');

echo "FILE WRITE WITH OLD DATA AGAIN" . PHP_EOL;

$strgMngr->saveAndShowData('4 Test ');