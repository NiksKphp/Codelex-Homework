<?php

namespace App;
require_once "vendor/autoload.php";

class Weather extends ApiHandler
{
    private function kelvinToCelsius(float $kelvin): float
    {
        return round(($kelvin - 273.15), 1);
    }

    public function getTemperature(): float
    {
        return $this->kelvinToCelsius($this->apiCallData->main->temp);
    }

    public function getWind(): float
    {
        return $this->apiCallData->wind->speed;
    }

    public function getClouds(): string
    {
        return $this->apiCallData->weather[0]->description;
    }
}











