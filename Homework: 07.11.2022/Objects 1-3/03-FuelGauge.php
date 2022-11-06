<?php

class FuelGauge
{
    public function __construct(int $fuel)
    {
        $this->fuel = $fuel;
    }

    public function reportFuel():string
    {
        return "Car has $this->fuel liters of fuel";
    }

    public function incrementFuel()
    {
        if ($this->fuel<70) {
            $this->fuel = $this->fuel + 1;
        }
    }

    public function decerementFuel()
    {
        if ($this->fuel>=0) {
            $this->fuel = $this->fuel - 1;
        }
    }
}

class Odometer
{
    public function __construct(int $mileage)
    {
        $this->mileage = $mileage;
    }

    public function reportMileage()
    {
        return "Car has $this->mileage mileage";
    }

    public function incrementMileage()
    {
        if ($this->mileage<=999999) {
            $this->mileage = $this->mileage + 1;
        } else {
            $this->mileage = 0;
        }
    }
}

$carFuel= new FuelGauge(50);
$carMileage = new Odometer(10);

//driving
$kmToDrive = 20;
$howManyKilometersPerLiter = 10;

for ($i=1;$i<=$kmToDrive;$i++){
    $howManyKilometersPerLiter = $howManyKilometersPerLiter-1;
    $carMileage->incrementMileage();
    if ($howManyKilometersPerLiter<=0){
        $carFuel->decerementFuel();
        $howManyKilometersPerLiter = $howManyKilometersPerLiter + 10;
    }
}

echo $carFuel->reportFuel().PHP_EOL;
echo $carMileage->reportMileage().PHP_EOL;