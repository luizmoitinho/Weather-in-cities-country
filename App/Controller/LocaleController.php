<?php


namespace App\Controller;

use App\DAO\LocaleDAO;
use App\Model\LocaleModel;

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


final class LocaleController{

  private $localeDAO;

  public function __construct(){

    $this->localeDAO =  new LocaleDAO();

  }


  public function getAllLocale(Request $request, Response $response, array $args): Response{
    
    $locale =  $this->localeDAO->getAllLocale();
  
    return $response->withJson($locale); 

  }


  public function getLocaleByName(Request $request, Response $response, array $args): Response{

    $data = $request->getParsedBody();
    
    if (is_array($data) && array_key_exists('name',$data)){

        if(empty($data['name']))
          return $response->withJson(['message' => 'Local não foi informado.']);
          
        $locale = new LocaleModel();
        $locale->setName($data['name']);

        $res = $this->localeDAO->getLocalesByName($locale);
        if($res !== False)
          return $response->withJson($res->getObjectVars());

        return $response->withJson(['message' => 'Local não encontrado.']);

    }

    return $response->withJson(['message' => 'Operação não permitida.']);

  }


  public function getLocaleByState(Request $request, Response $response, array $args): Response{

    $data = $request->getParsedBody();
    
    if (is_array($data) && array_key_exists('state',$data)){

        if(empty($data['state']))
          return $response->withJson(['message' => 'Estado não foi informado.']);
          
        $locale = new LocaleModel();
        $locale->setState($data['state']);

        $res = $this->localeDAO->getLocalesByState($locale);
        if($res !== False)
          return $response->withJson($res);

        return $response->withJson(['message' => 'Estado não encontrado.']);

    }

    return $response->withJson(['message' => 'Operação não permitida.']);

  }


  private function getLocaleById(LocaleModel $locale){

    if(empty($locale->getId()))
        return null;
          
    $locale = new LocaleModel();
    $locale->setId($data['id']);

    $res = $this->localeDAO->getLocaleById($locale);

    if($res !== False)
      return $response->withJson($res->getObjectVars());

    return False;

  }


}