<?php
class Dir
{
    private $directory = [];
    private $files = [];

    public function __construct($path){
        if(is_readable($path)){
            $items = scandir($path);

            foreach ($items as $item){
                if($item != "." && $item != ".."){
                    if(is_dir($path."/".$item)){
                        $this->directory[] = $item;
                    }else{
                        $this->files[] = $item;
                    }
                }
            }
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