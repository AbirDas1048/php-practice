<?php

$string = "The quick brown fox jumps over the lazy dog";

$replaced1 = str_replace('the', 'a', $string); // Case sensitive replace.
echo $replaced1 . PHP_EOL;

$replaced2 = str_replace('the', 'a', $string, $count1); // Case sensitive replace with count.
echo $replaced2 . PHP_EOL;
echo "Total replace: {$count1}" . PHP_EOL;

$replaced3 = str_ireplace('the', 'a', $string); // Case insensitive replace.
echo $replaced3 . PHP_EOL;

$replaced4 = str_ireplace('the', 'a', $string, $count2); // Case insensitive replace with count.
echo $replaced4 . PHP_EOL;
echo "Total replace: {$count2}" . PHP_EOL;
