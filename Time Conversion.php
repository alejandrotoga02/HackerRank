<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
     $delimiter = ':';
     $period = preg_match('/(AM)/', $s ) ? 'AM' : 'PM';
     $time = str_replace( $period, "", $s );
     $timeArr = explode($delimiter, $time );
     $hour = $timeArr[0];
     if ( $period == 'AM' ){
        $timeArr[0] = ( $hour == "12" ) ? "00" : $hour;
     } else {
        $timeArr[0] = ( $hour == "12" ) ? $hour : $hour + 12;
     }
     return implode($delimiter, $timeArr);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
