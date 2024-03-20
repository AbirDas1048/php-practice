<?php

// Inverted Mirrored Right Triangle Star Pattern
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