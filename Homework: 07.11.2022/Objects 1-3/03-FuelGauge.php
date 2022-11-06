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

    public function reportMileage():string
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


$kmToDrive = 20; // Distance to Drive
$howManyKilometersPerLiter = 10; // Car effectivity


//Car driving
for ($i=1;$i<=$kmToDrive;$i++){
    $howManyKilometersPerLiter = $howManyKilometersPerLiter-1;
    $carMileage->incrementMileage();
    if ($howManyKilometersPerLiter<=0){
        $carFuel->decerementFuel();
        $howManyKilometersPerLiter = $howManyKilometersPerLiter + 10;
    }
}

//Output result
echo $carFuel->reportFuel().PHP_EOL;
echo $carMileage->reportMileage().PHP_EOL;