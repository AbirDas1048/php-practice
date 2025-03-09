<?php
class Dir
{
    private $directory = [];
    private $files = [];
    private $path;

    public function __construct($path){
        if(is_readable($path)){
            $this->path = $path;
            $items = scandir($path);

            foreach ($items as $item){
                if($item != "." && $item != ".."){
                    if(is_dir($path.DIRECTORY_SEPARATOR.$item)){
                        $this->directory[] = $item;
                    }else{
                        $this->files[] = $item;
                    }
                }
            }
        }
    }

    public function getDirectory($index)
    {
        if(isset($this->directory[$index])){
            return new Dir($this->path.DIRECTORY_SEPARATOR.$this->directory[$index]);
        }else{
            throw new Exception("Directory does not exist");
        }
    }

    public function getDirectories()
    {
        return $this->directory;
    }

    public function getFiles()
    {
        return $this->files;
    }
}

echo "Read directory and files from root of current working directory" . PHP_EOL;
$dir = new Dir(dirname(getcwd()));
print_r($dir->getDirectories());
echo PHP_EOL;
print_r($dir->getFiles());
echo PHP_EOL;

echo "Read directory and files from current working directory" . PHP_EOL;
$dir2 = new Dir(getcwd());
print_r($dir2->getDirectories());
echo PHP_EOL;
print_r($dir2->getFiles());
echo PHP_EOL;

echo "Read directory and files from specific index of an directory" . PHP_EOL;
$oop = $dir->getDirectory(11);
print_r($oop->getFiles());