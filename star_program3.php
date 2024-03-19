<?php

// Mirrored Right Triangle Star Pattern
$n = 10;
$m = 1;
for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i - 1; $j++) {
        printf(" ");
    }
    for ($k = 0; $k < $m; $k++) {
        printf("*");
    }
    $m++;
    echo PHP_EOL;
}

/* 
    Output:
             *
            **
           ***
          ****
         *****
        ******
       *******
      ********
     *********
    **********
*/