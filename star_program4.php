<?php

// Inverted Mirrored Right Triangle Star Pattern

/*
    Solution 1
*/
$n = $m = 10;
for ($i = 0; $i < $n; $i++) {
    for ($j = $i; $j > 0; $j--) {
        printf(" ");
    }
    for ($k = $m; $k > 0; $k--) {
        printf("*");
    }
    $m--;
    echo PHP_EOL;
}

/*
    Solution 2
*/
$n = $m = 10;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        printf(" ");
    }
    for ($k = 0; $k < $m; $k++) {
        printf("*");
    }
    $m--;
    echo PHP_EOL;
}

/* 
    Output:
    **********
     *********
      ********
       *******
        ******
         *****
          ****
           ***
            **
             *
*/