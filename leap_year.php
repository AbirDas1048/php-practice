<?php

$year = 2000;

/*
    Example 1
*/

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "This is a leap year";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "This is not a leap year";
} else if ($year % 4 == 0) {
    echo "This is a leap year";
} else {
    echo "This is not a leap year";
}

echo "\n";

/*
    Example 2
*/

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "This is a leap year";
} else {
    echo "This is not a leap year";
}
