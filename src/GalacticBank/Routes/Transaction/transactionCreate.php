<?php

use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Models\Character;

/*
 * GET Route
 */
$app->get('/transaction/create', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $characters = Character::where('user_id', $user->id)
                              ->join('Balance', 'Balance.character_id', '=', 'Character.id')
                              ->select('Character.*', 'Balance.amount')
                              ->get();
  if (!$characters) {
    $error = 'Your account has no characters attached, you can create some <a href="/character/create">here</a>';
    return $this->view->render($response, 'transaction-create.php', [
      'error' => $error
    ]);
  }

  return $this->view->render($response, 'transaction-create.php', [
    'characters' => $characters
  ]);

})->add(new AuthMiddleware);

/*
 * POST Route.
 */
$app->post('/transaction/create', function ($request, $response, $args) {
    $token      = Token::where('token', $_SESSION['login_token'])->first();
    $user       = User::where('id', $token->user_id)->first();
    $characters = Character::where('user_id', $user->id)
                                ->join('Balance', 'Balance.character_id', '=', 'Character.id')
                                ->select('Character.*', 'Balance.amount AS balance')
                                ->get();

    $amount    = $_POST['amount'];
    $sender    = $_POST['sender'];
    $recipient = $_POST['recipient'];

    // Validate we have a valid transaction amount
    if (!is_numeric($amount) || !$amount > 0) {
      $error['amountError'] = 'Invalid Amount entered to be transferred.';
    }

    // Validate we have a valid character to transfer funds from and they have enough funds
    $invalidSender = true;
    foreach ($characters as $character) {
      if ($character->id === $sender) {
        $invalidSender = false;
        if ($character->balance < $amount) {
          $error['amountError'] = 'You do not have enough funds to transfer that amount.';
        }
      }
    }

    if ($invalidSender) {
      $error['senderError'] = 'Invalid Character selected to transfer funds from.';
    }




});
