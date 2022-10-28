<?php

/*
Modify the example program to compute the position of an object after falling for 10 seconds,
outputting the position in meters. The formula in Math notation is:

Gravity formula

Note: The correct value is -490.5m
 */

function objectPositionCalc($acceleration, $time){
    $initalPosition=0;
    $initalVelocity=0;

    $result = 0.5 * $acceleration * pow($time,2) + $initalVelocity * $time + $initalPosition;
    echo $result;

}

objectPositionCalc(-9.81,10);