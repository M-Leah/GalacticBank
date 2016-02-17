<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Transaction extends Eloquent
{
  protected $table    = 'Balance';
  protected $fillable = ['sender_character_id', 'recipient_character_id', 'amount'];
}
