<?php

use GalacticBank\Classes\AuthMiddleware;
use GalacticBank\Models\Token;
use GalacticBank\Models\User;
use GalacticBank\Models\Character;
use GalacticBank\Models\Transaction;
use GalacticBank\Models\Balance;

$app->get('/transaction/list/{id}', function ($request, $response, $args) {

  $token = Token::where('token', $_SESSION['login_token'])->first();
  $user  = User::where('id', $token->user_id)->first();

  $character_id = $args['id'];

  $character = Character::where('id', $character_id)->first();

  $sentTransactions     = Transaction::where('sender_character_id', $character->id)
                            ->join('Character', 'Character.id', '=', 'Transaction.sender_character_id')
                            ->join('Character AS recipientCharacter', 'recipientCharacter.id', '=', 'Transaction.recipient_character_id')
                            ->select('Character.name AS senderName', 'recipientCharacter.name AS recipientName', 'Transaction.*')
                            ->get();

  $receivedTransactions = Transaction::where('recipient_character_id', $character->id)
                            ->join('Character', 'Character.id', '=', 'Transaction.sender_character_id')
                            ->join('Character AS recipientCharacter', 'recipientCharacter.id', '=', 'Transaction.recipient_character_id')
                            ->select('Character.name AS senderName', 'recipientCharacter.name AS recipientName', 'Transaction.*')
                            ->get();

  $balance = Balance::where('character_id', $character->id)->first();

  return $this->view->render($response, 'transactions-previous.php', [
    'character'             => $character,
    'sent_transactions'     => $sentTransactions,
    'received_transactions' => $receivedTransactions,
    'balance'              => $balance
  ]);

})->add(new AuthMiddleware);
