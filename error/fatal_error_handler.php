<?php
register_shutdown_function(function (){
    $error = error_get_last();
    if($error){
        echo "fatal error\n";
    }
});

echo "hi\n";
echo $error;