<?php
class FavColor{
    public $color;

    public function __construct($color){
        $this->color = $color;
    }

    public function __toString(){
        return "My favourite color is {$this->color}\n";
    }
}

$obj1 = new FavColor("red");
echo $obj1;