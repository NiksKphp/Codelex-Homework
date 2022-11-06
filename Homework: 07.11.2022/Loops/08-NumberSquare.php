<?php

$min = (int) readline("Min? ");
$max = (int) readline("Max ");

$result = new NumberSquare($min,$max);

class NumberSquare
{
    public function numberSquare(int $min, int $max){
        for ($i = $min; $i < $max + 1; $i++) {
            for ($x = $i; $x < $max + 1; $x++) {
                echo $x;
            }
            for ($y = 0; $y < $i-$min; $y++) {
                echo $min + $y;
            }
            echo PHP_EOL;
        }
    }
}