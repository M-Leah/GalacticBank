<?php

$container = $app->getContainer();

// Pass in the View Dependencies.
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(VIEW_PATH, [
      'cache' => 'cache/twig',
      'auto_reload' => true
    ]);

    $view->addExtension(new Slim\Views\TwigExtension(
      $c['router'],
      $c['request']->getUri()
    ));

    return $view;
};
