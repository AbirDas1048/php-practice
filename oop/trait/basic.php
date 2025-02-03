<?php
trait NumberSeriesOne
{
    public function number1(): void
    {
        echo "Hi, I am number1 from NumberSeriesOne Trait". PHP_EOL;
    }
}

trait NumberSeriesTwo
{
    public function number2(): void
    {
        echo "Hi, I am number2 from NumberSeriesTwo Trait". PHP_EOL;
    }
}

class NumberSeries{
    use NumberSeriesOne, numberSeriesTwo;
}

$ns = new NumberSeries();
$ns->number1();
$ns->number2();