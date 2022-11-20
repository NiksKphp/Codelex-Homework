<?php
namespace App;

class ApiHandler
{
    private string $city;
    private string $apiKey = "a823f10aee30e76b6ce971bd52a26bdc";

    public function __construct(string $city)
    {
        $this->city=$city;
        $this->apiForLonLat = "http://api.openweathermap.org/geo/1.0/direct?q={$this->city},&limit=1&appid={$this->apiKey}";
        $this->weatherData = json_decode(file_get_contents($this->apiForLonLat));
        $this->apiCall = "https://api.openweathermap.org/data/2.5/weather?lat={$this->weatherData[0]->lat}&lon={$this->weatherData[0]->lon}&appid={$this->apiKey}";
        $this->apiCallData = json_decode(file_get_contents($this->apiCall));
    }
}