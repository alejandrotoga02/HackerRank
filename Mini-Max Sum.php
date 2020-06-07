<?php

function suma( $carry, $item){
    return $carry += $item;
}
function reducer ( $arr, $iniPos , $finalPos ){
    return array_reduce( array_slice( $arr, $iniPos, $finalPos) , 'suma');   
}
// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $length = count($arr);
    sort($arr);
    $min =  reducer( $arr, 0, $length -1 );
    $max =  reducer( $arr, 0, $length );
    print "${min} ${max}";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
