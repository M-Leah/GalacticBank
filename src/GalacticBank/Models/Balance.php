<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Balance extends Eloquent
{
  protected $table    = 'Balance';
  protected $fillable = ['character_id', 'amount'];
}
