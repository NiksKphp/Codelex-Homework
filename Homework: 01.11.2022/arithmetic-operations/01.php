<?php

//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

function integerCheck(int $input1,int $input2){
    if ($input1==15||$input2==15) {
        echo "true";
    }
    if ($input1+$input2==15||$input1-$input2==15||$input2-$input1==15){
        echo "true";
    }
    echo PHP_EOL;
}

$userInput1 = readline("Enter first number : ");
$userInput2 = readline("Enter second number : ");

integerCheck($userInput1,$userInput2);