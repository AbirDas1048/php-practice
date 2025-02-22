<?php
class Mathematical {
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }
}

$add_result = Mathematical::add(10, 5);
$subtract_result = Mathematical::subtract(10, 5);

echo "Add result is: $add_result\n";
echo "Subtract result is: $subtract_result\n";