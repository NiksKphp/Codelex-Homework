<?php

/*
Write a program that reads an positive integer and count the number of digits the number has.
 */

function howManyDigits($input){
    echo "Your input $input has " . strlen($input) . " digits";
    echo PHP_EOL;
}

$input = readline("Enter any positive integer: ");
howManyDigits($input);


