<?php

use GalacticBank\Classes\AuthMiddleware;

/*
 * GET Route.
 */
$app->get('/transaction', function ($request, $response, $args) {
  return $this->view->render($response, 'transaction.php', []);
})->add(new AuthMiddleware);
