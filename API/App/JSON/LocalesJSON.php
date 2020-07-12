<?php

namespace App\JSON;


use App\Model\LocaleModel;

final class LocalesJSON{
  
  /**
   * @var string
  */
  private $urlBaseLocale; 
  /**
   * @var array
  */
  private $arrayLocales;


  public function __construct(){
    
      $this->urlBaseLocale = file_get_contents(__DIR__.'/../Base/locales.json');
      $this->arrayLocales = json_decode($this->urlBaseLocale); 

  }

  public function getAllLocale(){

    return $this->arrayLocales;

  }

  public function getLocaleById(int $idLocale){

    foreach($this->arrayLocales as $locale)
      if($locale->id == $idLocale)
        return $locale;
                      
    return False;
  }


  public function getLocalesByState(string $stateLocale){
    
    $arrayStates = array();
    foreach($this->arrayLocales as $locale)
      if($locale->state == $stateLocale)
        array_push($arrayStates, $locale);     
  
    if(count($arrayStates)>0)
      return $arrayStates;
    return False;

  }


  public function getLocalesByName(string $nameLocale){

    foreach($this->arrayLocales as $locale)
      if($locale->name == $nameLocale)
        return $locale;
                      
    return False;

  }


}