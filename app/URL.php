<?php

namespace App;

class URL
{
    private string $url1 = 'http://api.weatherapi.com/v1/forecast.json?key=';
    private string $url2 = '&q=';
    private string $url3 = '&days=7&aqi=no&alerts=no';
    private string $fullURL;
    private string $APIkey;
    private string $city;

    public function __construct(string $APIkey, string $city = 'Riga')
    {
        $this->APIkey = $APIkey;
        $this->city = $city;
    }

    public function getURL()
    {
        return $this->url1 . $this->APIkey . $this->url2 . $this->city . $this->url3;
    }
}
