<?php

use GalacticBank\Models\Token;

$app->get('/logout', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $token->update(['active' => 'No']);

  $_SESSION['login_token'] = null;
  unset($_SESSION['login_token']);
  session_destroy();

  header('Location: /login');
  exit;
});
