<?php
class Color{
    public $color;
    public function __construct($color){
        $this->color = $color;
    }

    public function updateColor($color){
        $this->color = $color;
    }
}

class FavColor
{
    public $color;
    public $fav_color;
    public function __construct($fav_color, $color){
        $this->fav_color = $fav_color;
        $this->color = new Color($color);
    }

    public function updateColor($color){
        $this->color->updateColor($color);
    }
}

class FavColor2
{
    public $color;
    public $fav_color;
    public function __construct($fav_color, $color){
        $this->fav_color = $fav_color;
        $this->color = new Color($color);
    }

    public function updateColor($color){
        $this->color->updateColor($color);
    }

    public function __clone()
    {
        $this->color = clone $this->color;
    }
}

$obj1 = new FavColor('Some Data','Red');
$obj2 = new FavColor2('More Data','Blue');

$cloneOfObj1 = clone $obj1;
$cloneOfObj2 = clone $obj2;

print_r($obj1);
print_r($obj2);
print_r($cloneOfObj1);
print_r($cloneOfObj2);

$cloneOfObj1->updateColor('Green');
$cloneOfObj2->updateColor('Purple');

echo "After call updateColor";

print_r($obj1);
print_r($obj2);
print_r($cloneOfObj1);
print_r($cloneOfObj2);
