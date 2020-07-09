<?php


use function \src\slimConfig;

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

use App\Controller\LocaleController;


$app = new \Slim\App(slimConfig());

$app->get('/locale', LocaleController::class . ':getAllLocale');
$app->get('/localeByName', LocaleController::class . ':getLocaleByName');
$app->get('/localeByState', LocaleController::class . ':getLocaleByState');

$app->run();