<?php

function randomMac(string $delimeter = ":")
{
    $macArray[0] = "A";
    $macArray[1] = "B";
    $macArray[2] = "C";
    $macArray[3] = "D";
    $macArray[4] = "E";
    $macArray[5] = "F";
    $macArray[6] = "0";
    $macArray[7] = "1";
    $macArray[8] = "2";
    $macArray[9] = "3";
    $macArray[10] = "4";
    $macArray[11] = "5";
    $macArray[12] = "6";
    $macArray[13] = "7";
    $macArray[14] = "7";
    $macArray[15] = "9";

    $randomMac =
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)];
    return $randomMac;
}
