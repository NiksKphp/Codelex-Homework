<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(float $numberSurveyed)
{
    return round($numberSurveyed * 100) . '%';
}

function calculate_prefer_citrus(float $numberSurveyed)
{
    return round($numberSurveyed * 100) . '%';
}


echo "Total number of people surveyed " . $surveyed . " ";
echo "Approximately " . calculate_energy_drinkers($purchased_energy_drinks) . " bought at least one energy drink ";
echo calculate_prefer_citrus($prefer_citrus_drinks) . " of those " . "prefer citrus flavored energy drinks.";
