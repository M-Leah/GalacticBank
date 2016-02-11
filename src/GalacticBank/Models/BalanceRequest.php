<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class BalanceRequest extends Eloquent
{
  protected $table    = 'BalanceRequest';
  protected $fillable = ['character_id', 'amount', 'reason', 'status', 'completed', 'decision_reasoning'];
}
