<?php

namespace App\Model;

final class LocaleModel{
  
  /**
   * @var int
  */
  private $id;
  /**
   * @var string
  */
  private $name;
  /**
   * @var string
  */
  private $state;
  /**
   * @var float
  */
  private $latitude;
  /**
   * @var float
  */
  private $longitude;


  /**
   * Get the value of id
   *
   * @return  int
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @param  int  $id
   *
   * @return  self
   */ 
  public function setId(int $id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of nome
   *
   * @return  string
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of nome
   *
   * @param  string  $nome
   *
   * @return  self
   */ 
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of latitude
   *
   * @return  float
   */ 
  public function getLatitude()
  {
    return $this->latitude;
  }

  /**
   * Set the value of latitude
   *
   * @param  float  $latitude
   *
   * @return  self
   */ 
  public function setLatitude(float $latitude)
  {
    $this->latitude = $latitude;

    return $this;
  }

  /**
   * Get the value of longitude
   *
   * @return  float
   */ 
  public function getLongitude()
  {
    return $this->longitude;
  }

  /**
   * Set the value of longitude
   *
   * @param  float  $longitude
   *
   * @return  self
   */ 
  public function setLongitude(float $longitude)
  {
    $this->longitude = round($longitude,5);

    return $this;
  }

  /**
   * Get the value of state
   *
   * @return  string
   */ 
  public function getState()
  {
    return $this->state;
  }

  /**
   * Set the value of state
   *
   * @param  string  $state
   *
   * @return  self
   */ 
  public function setState(string $state)
  {
    $this->state = $state;

    return $this;
  }


  public function getObjectVars() {
    return get_object_vars($this);
  }

}