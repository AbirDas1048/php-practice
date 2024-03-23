<?php

function increment()
{
    static $i = 1;
    echo $i++ . "\n";
}

function decrement()
{
    static $i = 1;
    echo $i-- . "\n";
}

increment(); // Output: 1
increment(); // Output: 2
increment(); // Output: 3
increment(); // Output: 4
increment(); // Output: 5
decrement(); // Output: 1
decrement(); // Output: 0
decrement(); // Output: -1
increment(); // Output: 6
increment(); // Output: 7
decrement(); // Output: -2
decrement(); // Output: -3
