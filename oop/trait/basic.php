<?php
trait NumberSeriesOne
{
    public function number1(): void
    {
        echo "Hi, I am number1 from NumberSeriesOne Trait". PHP_EOL;
    }
}

class NumberSeries{
    use NumberSeriesOne;
}

$ns = new NumberSeries();
$ns->number1();