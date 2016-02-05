<?php
require_once '../vendor/autoload.php';
require_once 'Config/constants.php';
require_once 'Config/database.php';

session_start();

$configuration = [
  'settings' => [
    'displayErrorDetails' => true,
  ],
];

$container = new \Slim\Container($configuration);

$app = new \Slim\App($container);

require_once 'Dependencies.php';

require_once 'Routes.php';
