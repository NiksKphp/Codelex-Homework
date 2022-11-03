<?php

$numbers = [];

$firstNumber = readline("Input the 1st number: ");
array_push($numbers,$firstNumber);

$secondNumber = readline("Input the 2st number: ");
array_push($numbers,$secondNumber);

$thirdNumber = readline("Input the 3st number: ");
array_push($numbers,$thirdNumber);

echo "The highest input was: " . max($numbers) . PHP_EOL;