<?php

// Complete the staircase function below.
function staircase($n) {
    $pos = $n;
    for ( $i= 0; $i< $n ; $i++){
        $pos--;
        for( $j=0; $j <$n; $j++){
            print $j < $pos ? ' ' : '#';
        }
        print "\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
