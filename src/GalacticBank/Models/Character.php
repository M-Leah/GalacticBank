<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Character extends Eloquent
{
  protected $table    = 'Character';
  protected $fillable = ['name', 'faction', 'user_id', 'balance_id'];
}
