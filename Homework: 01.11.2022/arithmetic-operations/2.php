<?php
/*
Write a program called CheckOddEven which prints "Odd Number" if the int variable “number”
is odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.
*/

$number = 6;
print ($number & 1) ? "Odd" : "Even";
echo PHP_EOL;
echo "bye!";

//function CheckOddEven($input){
//    if ($input & 1) {
//        echo "Odd";
//    } else {
//        echo "Even";
//    }
//    echo PHP_EOL;
//    echo "bye!";
//}
//
//CheckOddEven(7);