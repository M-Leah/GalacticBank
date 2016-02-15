<?php

use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Classes\AuthMiddleware;

$app->get('/', function ($request, $response, $args) {

   $token = Token::where('token', $_SESSION['login_token'])->first();
   $user  = User::where('id', $token->user_id)->first();

  return $this->view->render($response, 'home.php', ['user' => $user]);
})->add(new AuthMiddleware());
