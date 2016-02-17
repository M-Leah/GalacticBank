<?php

use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\BalanceRequest;
use GalacticBank\Models\User;

$app->get('/balance/view-application/{name}', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

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

  $balanceRequest = BalanceRequest::where('character_id', $character->id)->orderBy('created_at', 'asc')->first();

  $this->view->render($response, 'balance-pending-view.php', [
    'character' => $character,
    'balance_request' => $balanceRequest
  ]);
})->add(new AuthMiddleware);
