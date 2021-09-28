<?php

namespace App;

class Contents
{
    private string $link;
    private array $content = [];

    public function __construct(string $link)
    {
        $this->link = $link;
        $this->content = json_decode(file_get_contents($this->link), true);
    }

    public function getData()
    {
       return $this->content;
    }

    public function getLocation(): string
    {
        return $this->content['location']['name'];
    }

    public function getTemp(): string
    {
        return $this->content['current']['temp_c'];
    }

    public function getCondition(): string
    {
        return $this->content['current']['condition']['text'];
    }

    public function getDate($day): string
    {
        return $this->content["forecast"]["forecastday"][$day]['date'];
    }

    public function getAverageTemp($day): string
    {
        return "{$this->content["forecast"]["forecastday"][$day]['day']['avgtemp_c']}°C";
    }

    public function getWarmestTemp($day): string
    {
        return $this->content['forecast']['forecastday'][$day]['day']['maxtemp_c'];
    }

    public function getConditions($day): string
    {
        return "{$this->content["forecast"]["forecastday"][$day]['day']['condition']['text']}";
    }

    public function currentDayForecastTime($hour): string
    {
        return $this->content['forecast']["forecastday"][0]['hour'][(string)$hour]['time'];
    }

    public function currentDayForecastTemp($hour): string
    {
        return "{$this->content['forecast']["forecastday"][0]['hour'][(string)$hour]["temp_c"]}°C";
    }

    public function currentDayForecastCondition($hour): string
    {
        return $this->content['forecast']["forecastday"][0]['hour'][(string)$hour]["condition"]['text'];
    }
}
