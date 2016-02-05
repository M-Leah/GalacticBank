<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;

$app->get('/balance/apply/{name}', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $token     = Token::where('token', $_SESSION['login_token'])->first();
  $user      = User::where('id', $token->user_id)->first();

  $name = $args['name'];
  if (empty($name)) {
    header('Location: /character');
    exit;
  }

  $name = str_replace('-', ' ', $name);
  $name = urldecode($name);

  $character = Character::where('name', $name)->first();

  if ($character->user_id !== $user->id) {
    header('Location: /character');
    exit;
  }

  if (is_null($character->balance_id)) {
    return $this->view->render($response, 'balance-apply.php', ['character' => $character]);
  }

});
