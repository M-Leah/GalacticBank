<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\BalanceRequest;

$app->get('/character', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $characters = Character::where('user_id', $user->id)->get();

  return $this->view->render($response, 'character.php', ['characters' => $characters]);

})->add(new AuthMiddleware);
