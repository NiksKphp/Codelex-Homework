<?php
require_once "vendor/autoload.php";

$city = (string)readline("Enter the name of location to get weather data: ");
$weather = new App\Weather($city);
echo PHP_EOL . "Temperature in $city is {$weather->getTemperature()}°C, {$weather->getClouds()} and the wind speed is {$weather->getWind()} m/s" . PHP_EOL;

