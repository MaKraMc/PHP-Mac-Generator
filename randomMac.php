<?php

function randomMac(string $delimeter = ":")
{
    $macArray = array("A", "B", "C", "D", "E", "F", "0", "1", "2", "3", "4", "5", "6", "7", "7", "9");

    $randomMac =
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)] . $delimeter .
        $macArray[random_int(0, 15)] . $macArray[random_int(0, 15)];
    return $randomMac;
}
