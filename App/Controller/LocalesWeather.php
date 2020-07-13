<?php


namespace App\Controller;

use App\JSON\LocalesJSON;
use App\JSON\WeatherJSON;

use App\Model\LocaleModel;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


final class LocalesWeather{

  private $localeJSON;
  private $weatherJSON;

  public function __construct(){

    $this->localeJSON =  new LocalesJSON();
    $this->weatherJSON = new WeatherJSON();

  }

  //================ WEATHERS/LCAOLES ===========================

  public function getWeatherByLocale(Request $request, Response $response, array $args):Response{
    $data = $request->getParsedBody();
    
    if (is_array($data) && array_key_exists('name',$data)){

        if(empty($data['name']))
          return $response->withJson(['message' => 'Local não foi informado.']);

        $locale = $this->localeJSON->getLocalesByName($data['name']);
        if($locale !== False){
          $weather = $this->weatherJSON->getByLocaleId($locale->id);
          return $response->withJson($weather);
        }  
        return $response->withJson(['message' => 'Local não encontrado.']);
    }

    return $response->withJson(['message' => 'Operação não pode ser realizada.']);


  }



  //================ LOCALES ===========================

  public function getAllLocale(Request $request, Response $response, array $args): Response{
    
    $locale =  $this->localeJSON->getAllLocale();
  
    return $response->withJson($locale); 

  }

  public function getLocaleByState(Request $request, Response $response, array $args): Response{
    $data = $request->getParsedBody();
    
    if (is_array($data) && array_key_exists('state',$data)){

        if(empty($data['state']))
          return $response->withJson(['message' => 'Estado não foi informado.']);

        $res = $this->localeJSON->getLocalesByState($data['state']);
        if($res !== False)
          return $response->withJson($res);

        return $response->withJson(['message' => 'Estado não encontrado.']);

    }

    return $response->withJson(['message' => 'Operação não permitida.']);

  }


  private function getLocaleById(int $idLocale){

    if(empty($idLocale))
        return null;
        
    $res = $this->localeJSON->getLocaleById($idLocale);

    if($res !== False)
      return $response->withJson($res);

    return False;

  }

  //====================== WEATHERS ===============================

  public function getAllWeathers(Request $request, Response $response, array $args): Response{
    
    $weathers =  $this->weatherJSON->getAllWeathers();
    return $response->withJson($weathers); 
  }


  public function getWeatherById(Request $request, Response $response, array $args): Response{
    $data =  $request->getParsedBody();
    $weathers =  $this->weatherJSON->getByLocaleId(intval($data['id']));
    return $response->withJson($weathers); 

  }


}