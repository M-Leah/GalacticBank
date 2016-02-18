<?php

use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Models\Balance;
use GalacticBank\Models\Character;
use GalacticBank\Models\Transaction;

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
      $error['amountError'][] = 'Invalid Amount entered to be transferred.';
    }

    // Validate we have a valid character to transfer funds from and they have enough funds
    $invalidSender = true;
    foreach ($characters as $character) {
      if ($character->id == $sender) {
        $invalidSender = false;
        if ($character->balance < $amount) {
          $error['amountError'][] = 'You do not have enough funds to transfer that amount.';
        }
      }
    }

    $senderCharacter = Character::where('id', $sender)->first();
    if (!$senderCharacter) {
      $invalidSender = true;
    }

    if ($invalidSender) {
      $error['senderError'][] = 'Invalid Character selected to transfer funds from.';
    }

    if ($senderCharacter->name == $recipient) {
      $error['recipientError'][] = 'You cannot transfer funds to yourself.';
    }

    $recipientCharacter = Character::where('name', $recipient)->first();
    if (!$recipientCharacter) {
      $error['recipientError'][] = 'Recipient character does not exist.';
    }

    $senderBalance    = Balance::where('character_id', $senderCharacter->id)->first();
    $recipientBalance = Balance::where('character_id', $recipientCharacter->id)->first();

    if (!$senderBalance) {
      $error['senderError'][] = 'No balance found for sender, ensure one exists.';
    }

    if (!$recipientBalance) {
      $error['recipientError'][] = 'Recipient does not have a balance,
                                  they must have a balance before receiving a transaction.';
    }


    if (!empty($error)) {
      return $this->view->render($response, 'transaction-create.php', [
        'senderError' => $error['senderError'],
        'recipientError' => $error['recipientError'],
        'amountError' => $error['amountError'],
        'characters' => $characters
      ]);
    }

    $transaction = new Transaction;
    $transactionCompleted = $transaction->performTransaction(
                              $amount,
                              $senderCharacter->id,
                              $recipientCharacter->id
                            );

    if ($transactionCompleted) {
      Audit::create([
        'category'   => 'Successful Transaction',
        'log_note'   => 'Transaction successfully completed for the amount of '
                        . $amount . ' between ' . $senderCharacter->name . ' and '
                        . $recipientCharacter->name,
        'user_id'    => $user->id,
        'ip_address' => $_SERVER['REMOTE_ADDR']
      ]);
    }

    var_dump('successful transaction');

});
