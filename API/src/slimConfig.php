<?php

namespace src;

function slimConfig(): \Slim\Container{
  $config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
  ];
  return new \Slim\Container($config);
}