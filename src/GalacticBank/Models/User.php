<?php

namespace GalacticBank\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
  protected $table    = 'User';
  protected $fillable = ['username', 'password', 'email'];
}
