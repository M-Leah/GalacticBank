<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\BalanceRequest;

$app->get('/character', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $characters = Character::where('user_id', $user->id)->get();

  return $this->view->render($response, 'character.php', ['characters' => $characters]);
});

$app->get('/character/{name}', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

  $name = $args['name'];
  if (empty($name)) {
    header('Location: /character');
    exit;
  }

  $name = str_replace('-', ' ', $name);
  $name = urldecode($name);

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $character = Character::where('name', $name)->first();

  // Get the latest balance request.
  $balanceRequest = BalanceRequest::where('character_id', $character->id)
                                      ->orderBy('created_at', 'desc')
                                      ->first();



  if ($balanceRequest && $balanceRequest->status == 'Accepted') {
    $balance = Balance::where('character_id', $character->id)->first();
    return $this->view->render($response, 'character-profile.php', [
      'character' => $character,
      'user' => $user,
      'balance' => $balance
    ]);
  }

  return $this->view->render($response, 'character-profile.php', [
    'character' => $character,
    'user' => $user,
    'balance_request' => $balanceRequest]
  );

  // TODO: Add error route if character doesn't exist.
});
