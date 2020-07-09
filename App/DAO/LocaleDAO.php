<?php

namespace App\DAO;


use App\Model\LocaleModel;

final class LocaleDAO{
  
  private $urlBaseLocale; 

  public function __construct(){
      $this->urlBaseLocale = file_get_contents('App/Base/locales.json');
  }

  public function getAllLocale(){

    return json_decode($this->urlBaseLocale);

  }

  public function getLocaleById(LocaleModel $locale){
    
    $jsonLocale = json_decode($this->urlBaseLocale);

    foreach($jsonLocale as $jsonLocale)
      if($jsonLocale->id == $locale->getId())
        return $locale->setName($jsonLocale->name)
                        ->setState($jsonLocale->state)
                        ->setLongitude($jsonLocale->longitude)
                        ->setLatitude($jsonLocale->latitude);
                      
    return False;
  }


  public function getLocalesByState(LocaleModel $locale){
    
    $jsonLocale = json_decode($this->urlBaseLocale);

    $arrayStates = array();
    foreach($jsonLocale as $jsonLocale)
      if($jsonLocale->state == $locale->getState())
        array_push($arrayStates, $locale->setName($jsonLocale->name)
                        ->setId($jsonLocale->id)
                        ->setLongitude($jsonLocale->longitude)
                        ->setLatitude($jsonLocale->latitude)->getObjectVars()
        );     
  
    if(count($arrayStates)>0)
      return $arrayStates;
    return False;

  }


  public function getLocalesByName(LocaleModel $locale){

    $jsonLocale = json_decode($this->urlBaseLocale);

    foreach($jsonLocale as $jsonLocale)
      if($jsonLocale->name == $locale->getName())
        return $locale->setId($jsonLocale->id)
                        ->setState($jsonLocale->state)
                        ->setLongitude($jsonLocale->longitude)
                        ->setLatitude($jsonLocale->latitude);
                      
    return False;

  }


}