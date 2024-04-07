<?php

$string = "The quick brown fox jumps over the lazy dog";

echo strpos($string, "the") . PHP_EOL; // Case sensitive search.
echo strpos($string, "the", 15) . PHP_EOL; // Case sensitive search after the offset value.

echo strrpos($string, "the") . PHP_EOL; // Reverse Case sensitive search.
echo strrpos($string, "the", -13) . PHP_EOL; // Reverse Case sensitive search with negative offset.

echo stripos($string, "the") . PHP_EOL; // Case insensitive search.
echo stripos($string, "the", 15) . PHP_EOL; // Case insensitive search after the offset value.

echo strripos($string, "the") . PHP_EOL; // Reverse Case insensitive search.
echo strripos($string, "the", -13) . PHP_EOL; // Reverse Case insensitive search with negative offset.