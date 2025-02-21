<?php
class Mathematical {

    private static $total_operation = 0;

    public static function add($a, $b)
    {
        self::$total_operation++;
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        self::$total_operation++;
        return $a - $b;
    }

    public static function getTotalOperation()
    {
        return self::$total_operation;
    }
}

$add_result = Mathematical::add(10, 5);
$subtract_result = Mathematical::subtract(10, 5);

echo "Add result is: $add_result\n";
echo "Subtract result is: $subtract_result\n";
echo "Total operation count is: " . Mathematical::getTotalOperation() . PHP_EOL;