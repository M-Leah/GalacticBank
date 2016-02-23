<?php

use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\User;

$app->get('/transaction/list', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $characters = Character::where('user_id', $user->id)->get();

  return $this->view->render($response, 'transaction-character-list.php', [
    'characters' => $characters
  ]);

})->add(new AuthMiddleware);
