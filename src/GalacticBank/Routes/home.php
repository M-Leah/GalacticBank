<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Token;

$app->get('/', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  return $this->view->render($response, 'home.php', ['user' => $user]);
});
