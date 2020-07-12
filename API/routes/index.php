<?php

require_once '../vendor/autoload.php';
require_once '../src/slimConfig.php';



use function \src\slimConfig;

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

use App\Controller\LocalesWeather;


$app = new \Slim\App(slimConfig());


$app->get('/searchWeather', LocalesWeather::class . ':getWeatherByLocale');

$app->get('/locale', LocalesWeather::class . ':getAllLocale');
$app->get('/localeByState', LocalesWeather::class . ':getLocaleByState');

$app->get('/weathers', LocalesWeather::class . ':getAllWeathers');
$app->get('/weatherById', LocalesWeather::class . ':getWeatherById');

$app->run();