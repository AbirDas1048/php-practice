<?php

/*
    Example 1
*/

$n = 10;
/*
    Not a good practice:
    $result = ($n % 2 == 0) ? "A" : ($n == 11) ? "B" : "C";

    Best practice:
    $result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C");
*/
$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C");
echo $result . "\n"; // Output: A
