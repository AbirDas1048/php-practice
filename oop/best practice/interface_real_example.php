<?php
class DistrictCollection implements IteratorAggregate, Countable {
    private $districts;
    public function __construct(){
        $this->districts = [];
    }

    public function addDistrict($district){
        $this->districts[] = $district;
    }

    public function getIterator(){
        return new ArrayIterator($this->districts);
    }

    public function count(){
        return count($this->districts);
    }
}

$districts = new DistrictCollection();

$districts->addDistrict('Dhaka');
$districts->addDistrict('Chittagong');
$districts->addDistrict('Sylhet');

foreach ($districts as $district){
    echo $district.PHP_EOL;
}
echo PHP_EOL;
echo "Total districts {$districts->count()}.\n";
