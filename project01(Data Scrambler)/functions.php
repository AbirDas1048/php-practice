<?php
function displayKey($key)
{
    printf(" value = '%s' ", $key);
}

function scramblerData($original_data, $key): string
{
    $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($original_data);
    for($i = 0; $i < $length; $i++){
        $current_char = $original_data[$i];
        $position = strpos($original_key, $current_char);
        if($position !== false){
            $data .= $key[$position];
        }else{
            $data .= $current_char;
        }
    }
    return $data;
}

function decodeData($original_data, $key): string
{
    $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($original_data);
    for($i = 0; $i < $length; $i++){
        $current_char = $original_data[$i];
        $position = strpos($key, $current_char);
        if($position !== false){
            $data .= $original_key[$position];
        }else{
            $data .= $current_char;
        }
    }
    return $data;
}