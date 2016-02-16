<?php

use GalacticBank\Models\Character;
use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Models\BalanceRequest;
use GalacticBank\Models\Balance;
use GalacticBank\Classes\AuthMiddleware;

$app->get('/character/{name}', function ($request, $response, $args) {

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
      'balance' => $balance,
      'balance_request' => $balanceRequest
    ]);
  }

  return $this->view->render($response, 'character-profile.php', [
    'character' => $character,
    'user' => $user,
    'balance_request' => $balanceRequest]
  );

  // TODO: Add error route if character doesn't exist.

})->add(new AuthMiddleware);
