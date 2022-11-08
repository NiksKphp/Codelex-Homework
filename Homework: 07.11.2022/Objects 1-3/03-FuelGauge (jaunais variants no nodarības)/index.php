<?php

require_once 'Odometer.php';
require_once 'FuelGauge.php';

$fuelGauge = new FuelGauge(10);
$odometer = new Odometer();

while ($fuelGauge->getAmount() > 0){
    echo "We drove 1km" . PHP_EOL;

    $odometer->increment();
    if ($odometer->getMileage() % 10 === 0){
        $fuelGauge->use(1);
        echo "Removing 1 liter.".PHP_EOL;
    }
    sleep(1);
}