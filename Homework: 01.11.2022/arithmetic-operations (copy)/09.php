<?php

/*
Write a program that calculates and displays a person's body mass index (BMI).
A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
Where weight is measured in pounds and height is measured in inches. Display a message indicating whether
the person has optimal weight, is underweight, or is overweight. A sedentary person's weight is considered optimal
if his or her BMI is between 18.5 and 25. If the BMI is less than 18.5, the person is considered underweight.
If the BMI value is greater than 25, the person is considered overweight.

Your program must accept metric units.
 */

function BMIcalculator($weight,$height) {
    $weightInPounds = $weight * 2.205;
    $heightInInches = $height / 2.54;
    $BMI = ($weightInPounds * 703) / (pow($heightInInches,2));

    if ($BMI>25){
        echo "You are overweight. Your BMI is - ";
    }
    if ($BMI<18.5) {
        echo "You are underweight. Your BMI is - ";
    }
    if ($BMI<25 && $BMI>18.5) {
        echo "Your BMI is optimal. Your BMI is - ";
    }
    echo round($BMI,2);
    echo PHP_EOL;
}

$weight = readline("Weight in Kg: ");
$height = readline("Height in Cm: ");

BMIcalculator($weight,$height);