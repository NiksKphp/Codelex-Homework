<?php

/*
Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables
lower bound and upper bound, so that we can change their values easily. Also compute and display the average.
The output shall look like:

The sum of 1 to 100 is 5050
The average is 50.5
*/

$numbers = range(1, 100);

function Calc($input){
    $total = array_sum($input);
    $average = array_sum($input) / count($input);
    $inputLength = count($input)-1;

    echo "The sum of $input[0] to $input[$inputLength] is $total";
    echo PHP_EOL;
    echo "The average is $average";
}

Calc($numbers);




