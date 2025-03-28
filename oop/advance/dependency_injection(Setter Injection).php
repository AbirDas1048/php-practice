<?php
/***
 * Setter Injection (Method Injection)
 * Dependencies are injected via setter methods after object creation.
 * This provides flexibility but can lead to missing dependencies if not set properly.
 */

interface BaseStorage
{
    public function setFileName($file_name);

    public function setMode($mode);

    public function writeData($data);

    public function readData();
}

class Storage implements BaseStorage
{
    private $file_name;
    private $mode;

    public function setFileName($file_name): void
    {
        $this->file_name = $file_name;
    }

    public function setMode($mode): void
    {
        $this->mode = $mode;
    }

    public function writeData($data): void
    {
        if (!$this->file_name) {
            throw new Exception("File name is not set.");
        }
        file_put_contents($this->file_name, $data, $this->mode);
    }

    public function readData()
    {
        if (!$this->file_name) {
            throw new Exception("File name is not set.");
        }
        echo file_get_contents($this->file_name) . PHP_EOL;
    }
}

class StorageManager
{
    private $storage;

    public function setStorage(BaseStorage $storage): void
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

$strg = new Storage();
$strg->setFileName($file);

$strgMngr = new StorageManager();
$strgMngr->setStorage($strg);
$strgMngr->saveAndShowData('1 Test ');

echo "FILE WRITE WITH NEW DATA AGAIN" . PHP_EOL;

$strgMngr->saveAndShowData('2 Test ');

echo "FILE WRITE WITH OLD DATA" . PHP_EOL;

$strg->setMode(FILE_APPEND);
$strgMngr->saveAndShowData('3 Test ');

echo "FILE WRITE WITH OLD DATA AGAIN" . PHP_EOL;

$strg->setMode(FILE_APPEND);
$strgMngr->saveAndShowData('4 Test ');

