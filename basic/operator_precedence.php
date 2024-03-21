<?php
/*
    Example 1
*/

$result1 = false || true;
$result2 = false or true;

var_dump($result1, $result2);
/*
    Output: bool(true)
            bool(false)
*/

/*
    Example 2
*/

$result1 = true && false;
$result2 = true and false;

var_dump($result1, $result2);

/*
    Output: bool(false)
            bool(true)
*/
