<?php

namespace App\JSON;


final class WeatherJSON{

  /**
   * @var string
  */
  private $urlBaseWeather; 
  /**
   * @var array
  */
  private $arrayWeathers;


  public function __construct(){

    $this->urlBaseWeather = file_get_contents('App/Base/weather.json');
    $this->arrayWeathers = json_decode($this->urlBaseWeather); 

  }

  public function getAllWeathers(){

      return $this->arrayWeathers;

  }

  public function getByLocaleId(int $idLocale){

    foreach($this->arrayWeathers as $weather)
        if($weather->locale->id == $idLocale)
          return $weather;
    
    return [];

  }





}