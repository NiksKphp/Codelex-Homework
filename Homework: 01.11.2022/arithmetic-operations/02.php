<?php
/*
Write a program called CheckOddEven which prints "Odd Number" if the int variable “number”
is odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.
*/

$number = readline("Enter number : ");
print ($number & 1) ? "Odd" : "Even";
echo PHP_EOL;
echo "bye!";
echo PHP_EOL;