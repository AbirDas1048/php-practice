<?php

define('PI', 3.1416);

echo PI . "\n"; // Output: 3.1416
echo constant('PI') . "\n"; // Output: 3.1416
echo "The value of PI is " . PI . "\n"; // Output: The value of PI is 3.1416

$constant = 'constant';
echo "Value of PI is {$constant('PI')}"; // Output: Value of PI is 3.1416
