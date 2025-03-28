<?php
class BaseNumberSeries
{
    public function number1(): void
    {
        echo "Hi, I am number1 from BaseNumberSeries class". PHP_EOL;
    }

    public function number2(): void
    {
        echo "Hi, I am number2 from BaseNumberSeries class". PHP_EOL;
    }

    public function number3(): void
    {
        echo "Hi, I am number3 from BaseNumberSeries class". PHP_EOL;
    }
}

trait TraitNumberSeries
{
    public function number1(): void
    {
        echo "Hi, I am number1 from TraitNumberSeries Trait". PHP_EOL;
    }

    public function number2(): void
    {
        echo "Hi, I am number2 from TraitNumberSeries Trait". PHP_EOL;
    }

    public function sameMethod(): void
    {
        echo "Hi, I am sameMethod from TraitNumberSeries Trait". PHP_EOL;
    }

}

trait TraitNumberSeries2
{
    public function sameMethod(): void
    {
        echo "Hi, I am sameMethod from TraitNumberSeries2 Trait". PHP_EOL;
    }

}

class NumberSeries extends BaseNumberSeries{
    use TraitNumberSeries, TraitNumberSeries2{
        TraitNumberSeries::sameMethod insteadof TraitNumberSeries2;
        TraitNumberSeries2::sameMethod as traitNumberSeries2SameMethod;
    }

    public function number1(): void
    {
        echo "Hi, I am number1 from NumberSeries class". PHP_EOL;
    }
}

$ns = new NumberSeries();
$ns->number1();
$ns->number2();
$ns->number3();
$ns->sameMethod();
$ns->traitNumberSeries2SameMethod();