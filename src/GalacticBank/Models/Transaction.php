<?php

namespace GalacticBank\Models;

use GalacticBank\Models\Balance;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Transaction extends Eloquent
{
  protected $table    = 'Transaction';
  protected $fillable = ['sender_character_id', 'recipient_character_id', 'amount'];

  public function performTransaction($amount, $sender_id, $recipient_id)
  {
    $connection = Eloquent::getConnection();
    try {
      $connection->getPdo()->beginTransaction();

      $sender    = Balance::where('character_id', $sender_id)->first();
      $recipient = Balance::where('character_id', $recipient_id)->first();

      $sender->update([
        'amount' => $sender->amount - $amount
      ]);

      $recipient->update([
        'amount' => $recipient->amount + $amount
      ]);

      $connection->getPdo()->commit();

    } catch (\Exception $e) {
      $connection->getPdo()->rollback();
      return false;
    }

    return true;
  }
}
