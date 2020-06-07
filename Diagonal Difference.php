<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $length =  count( $arr );
    $position = 0;
    $sum1 = 0;
    $sum2 = 0;

    //primary diagonal
    for ( $i=0; $i<$length; $i++ ){
        for ( $j=0; $j<$length; $j++ ){
            if ( $j == $position ) {
                $sum1 += $arr[$i][$j];                
            }
        }
        $position++;
    }
    $pos =  $position -1;
    // secondary diagonal
    for ( $a=0; $a<$length; $a++ ){
        for ( $b=0; $b<$length; $b++ ){
            if ( $b == $pos ) {
                $sum2 += $arr[$a][$b];
            }
        }
        $pos--;
    }
    return abs( $sum1 - $sum2);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
