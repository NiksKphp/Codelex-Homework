<?php

$input = readline("Enter the number: ");

if ($input>=1){
    echo "positive";
} elseif ($input == 0){
    echo "The number zero is neither positive nor negative.";
} else {
    echo "negative";
}
//todo print if number is positive or negative