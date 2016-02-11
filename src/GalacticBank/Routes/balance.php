<?php

use GalacticBank\Models\User;
use GalacticBank\Models\Token;
use GalacticBank\Models\Character;
use GalacticBank\Models\BalanceRequest;

$app->get('/balance/apply/{name}', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

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

  $balanceRequest = BalanceRequest::where('character_id', $character->id)->first();
  if ($balanceRequest && $balanceRequest->status !== 'Rejected') {
    header('Location: /balance/apply/view/' . $args['name']);
    exit;
  }

  if ($character->user_id !== $user->id) {
    header('Location: /character');
    exit;
  }

  if (is_null($character->balance_id)) {
    return $this->view->render($response, 'balance-apply.php', ['character' => $character]);
  }

});

$app->get('/balance/apply/view/{name}', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

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
});

$app->post('/balance/apply/{name}', function ($request, $response, $args) {

  // TODO: Extract Login to a method.
  $token = Token::validateToken($_SESSION['login_token']);
  if ($token === false || is_null($token)) {
    header('Location: /login');
    exit;
  }

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

  $value     = isset($_POST['balance_request']) ? $_POST['balance_request'] : '';
  $reasoning = isset($_POST['reason']) ? $_POST['reason'] : '';

  if (!is_numeric($value) || empty($value)) {
    $error['value'] = 'Value needs to be numeric.';
  }

  if (empty($reasoning)) {
    $error['reasoning'] = 'You need to specify a reason for the requested amount.';
  }

  if (!empty($error)) {
    return $this->view->render($response, 'balance-apply.php', ['error' => $error, 'character' => $character]);
  }

  // TODO: Fix this logic so rejected applications can pass through.
  $balanceRequest = BalanceRequest::where('character_id', $character->id)->orderBy('created_at', 'desc')->first();
  if (!$balanceRequest || $balanceRequest->status == 'Rejected') {
      $balanceRequest = BalanceRequest::create([
        'character_id' => $character->id,
        'amount' => $value,
        'reason' => $reasoning,
        'status' => 'Pending',
        'complete' => 'No'
      ]);
  }

  if ($balanceRequest) {
    header('Location: /character/' . $args['name']);
    exit;
  }

  $error['balance_creation'] = 'There was a problem with your requests, if the problem persists please contact the Administrator.';
  return $this->view->render($response, 'balance-apply.php', ['error' => $error, 'character' => $character]);

});
